<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingValueRequest;
use App\Models\Setting;
use App\Models\SettingValue;
use Illuminate\Support\Facades\DB;

class SettingValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function index()
    {
        // $this->authorize('viewAny', SettingValue::class);
        /**
         * Get all the settings
         */
        $settingValues = SettingValue::all();

        /**
         * Return the results
         */
        return view('general.settings.index', compact('settingValues'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */

    public function store(SettingValueRequest $request, Setting $setting)
    {
        //  Authorize the request
        // $this->authorize('create', SettingValue::class);

        //  Get the validated date
        $data = $request->validated();

        DB::transaction(function() use ($data, $setting){
            $value = $setting->values()->create($data);
        });

        //  Redirect to the previous page and flash a message
        return redirect()->back()->with([
            'success' => trans('alerts.success.setting-value.created')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function show(SettingValue $settingValue)
    {
        /**First, authorization check for user */
        // $this->authorize('view', $settingValue);

        /**
         * Get specific setting with relationships
         */
        $settingValue = $settingValue->load(['values']);

        // Return response to view
        return view('admin.settings.value', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function update(SettingValueRequest $request, SettingValue $settingValue)
    {
        // $this->authorize('update', $settingValue);

        $data = $request->validated();

        //Update the setting data
        DB::transaction(function() use ($settingValue, $data){
            $settingValue->update($data);
        });

        /**
         * Once updated,
         * Return response with message and data
         */
        return redirect()->back()->with([
            'success' => trans('alerts.success.setting-value.updated')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkPlanModule  $workPlanModule
     * @return \Illuminate\Http\Response
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function destroy(SettingValue $settingValue, Setting $setting)
    {
        //  Authorize the request
        $this->authorize('delete', $settingValue);

        //  Launch a database transaction
        DB::transaction(function() use ($settingValue){
            //  Delete the workplan module
            $settingValue->delete();
        });

        //  Redirect back to the previous page and flash a success message
        return redirect()->back()->with([
            'success' => trans('alerts.success.setting-value.deleted')
        ]);
    }
}
