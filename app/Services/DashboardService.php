<?php

namespace App\Services;

use App\Models\ModuleTemplate;
use App\Models\Service;
use App\Models\Course;
use App\Models\Trainee;
use App\Models\Trainer;
use App\Models\Training;
use App\Models\TrainingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class DashboardService
{
    /**
     * Return manager dashboard data
     *
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function getManagerData(): array
    {
        //  Lazy load training request data
        $trainings = Training::with(['trainer.user', 'moduleTemplate', 'memberTraining'])->latest()->get();

        //  Return the payload
        return [
            'trainings' => $this->getTrainingData($trainings),
        ];
    }

    /**
     * Return manager dashboard training request data
     *
     * @param Collection $trainings
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function getTrainingData(Collection $trainings): array
    {
        //  Get all training requests
        $requests = $this->getPendingTrainings($trainings);

        //  Get all training provisions
        $provisions = $this->getTrainingProvisions($trainings);

        //  Generate training request chart payload
        $requestChartPayload = $this->getRequestChartPayload($requests);

        //  Generate training provision chart payload
        $provisionChartPayload = $this->getProvisionChartPayload($provisions);

        //  Return the unapproved, ongoing and completed stats
        $unapproved = $trainings->where('status', 'AWAITING_TRAINER_APPROVAL');
        $ongoing = $trainings->where('status', 'ONGOING');
        $completed = $trainings->where('status', 'COMPLETED');
        $preEvaluation = $trainings->where('status', 'AWAITING_PRE-TRAINING_ASSESSMENT');


        //  Structure the training request array payload
        return [
            'all' => $trainings,
            'requests' => $requests,
            'provisions' => $provisions,
            'unapproved' => $requests->isNotEmpty() ? ($unapproved->count() / $requests->count() * 100) : 0,
            'preEvaluation' => $requests->isNotEmpty() ? ($preEvaluation->count() / $requests->count() * 100) : 0,
            'ongoing' => $provisions->isNotEmpty() ? ($ongoing->count() / $provisions->count() * 100) : 0,
            'completed' => $provisions->isNotEmpty() ? ($completed->count() / $provisions->count() * 100) : 0,
            'charts' => [
                'requests' => [
                    'labels' => $requestChartPayload->pluck('status')->toArray(),
                    'data' => $requestChartPayload->pluck('count')->toArray(),
                    'colors' => $requestChartPayload->pluck('color')->toArray(),
                ],
                'provisions' => [
                    'labels' => $provisionChartPayload->pluck('status')->toArray(),
                    'data' => $provisionChartPayload->pluck('count')->toArray(),
                    'colors' => $provisionChartPayload->pluck('color')->toArray(),
                ],
            ]
        ];
    }

    /**
     * Return a list of all training requests from a collection
     *
     * @param Collection $trainings
     * @return Collection
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function getPendingTrainings(Collection $trainings): Collection
    {
        return $trainings->filter(function($trainingRequest){
            return $trainingRequest->hasStatus( config('settings.training_request.status.requests') );
        });
    }

    /**
     * Return a list of all training requests from a collection
     *
     * @param Collection $trainings
     * @return Collection
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function getTrainingProvisions(Collection $trainings): Collection
    {
        return $trainings->filter(function($trainingRequest){
            return $trainingRequest->hasStatus( config('settings.training_request.status.provisions') );
        });
    }

    /**
     * Return training requests structured in a chart js renderble way
     *
     * @param Collection $requests
     * @return Collection
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function getRequestChartPayload(Collection $requests): Collection
    {
        //  Build request chart payload
        return $this->buildChartPayload($requests, 'request');
    }

    /**
     * Return training provisions structured in a chart js renderble way
     *
     * @param Collection $provisions
     * @return Collection
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function getProvisionChartPayload(Collection $provisions): Collection
    {
        //  Build provision chart payload
        return $this->buildChartPayload($provisions, 'provision');
    }

    /**
     * Build chart payload
     *
     * @param Collection $trainings
     * @param string $type
     * @return Collection
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function buildChartPayload(Collection $trainings, string $type): Collection
    {
        return $this->groupTrainingRequestsBy($trainings, 'status')
            ->map(function($trainings, $status) use ($type){
                return [
                    'status' => prettify($status),
                    'count' => $trainings->count(),
                    'color' => config("chart.colors.training_request.$type.$status")
                ];
            });
    }

    /**
     * Group training requests by a certain attribute
     *
     * @param Collection $requests
     * @return Collection
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function groupTrainingRequestsBy(Collection $trainings, string $attribute)
    {
        //  Group the request payload by the attribute
        return $trainings->groupBy(function($trainingRequest) use ($attribute){
            return $trainingRequest->getRawOriginal( $attribute );
        });
    }
}
