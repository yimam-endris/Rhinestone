<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    protected function prepareForValidation(): void
    {
        //  Define the error bag dynamically
        $this->errorBag = $this->{'_bag'};
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @author Nderi Kamau <nderikamau1212@gmail.com>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required']
        ];
    }
}
