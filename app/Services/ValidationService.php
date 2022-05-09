<?php

namespace App\Services;

use App\Models\User;
use App\Rules\PhoneNumberValid;
use Illuminate\Validation\Rule;

class ValidationService
{
    /**
     * Return the user validation rules
     *
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function user(?User $user = null, string $prefix = ''): array
    {
        //  Return the rules
        return [
            $prefix.'organization_id' => ['nullable', 'numeric', 'exists:organizations,id'],
            $prefix.'county_id' => ['required', 'numeric', 'exists:counties,id'],
            $prefix.'name' => ['required', 'string', 'min:3'],
            $prefix.'email' => ['required', Rule::unique('users', 'email')->ignore($user), 'email', 'min:3'],
            $prefix.'phone_number' => ['required', Rule::unique('users', 'phone_number')->ignore($user), 'string', 'min:3', new PhoneNumberValid],
            $prefix.'gender' => ['required','string', Rule::in(config('settings.user.genders'))],
            $prefix.'locality' => ['required', 'string', 'min:3'],
            $prefix.'password' => ['required', 'string', 'confirmed'],
        ];
    }

    /**
     * Return the trainer validation rules
     *
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function trainer(string $prefix = ''): array
    {
        //  Return the rules
        return [
            $prefix.'bio' => ['required', 'string', 'min:20'],
            $prefix.'website' => [
                'nullable', 'regex:/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i'
            ],
        ];
    }

    /**
     * Return the experience validation rules
     *
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function experience(string $prefix = ''): array
    {
        //  Return the rules
        return [
            $prefix.'description' => ['required', 'string', 'min:10'],
            $prefix.'start_year' => ['required', 'numeric', 'min:1970', 'max:'.date('Y')],
            $prefix.'end_year' => ['required', 'numeric', 'min:1970', 'max:'.date('Y'), 'gte:'.$prefix.'start_year'],
            $prefix.'location' => ['required', 'string', 'min:3'],
        ];
    }

    /**
     * Return the qualification validation rules
     *
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function qualification(string $prefix = ''): array
    {
        //  Return the rules
        return [
            $prefix.'certification' => ['required', 'string', 'min:3'],
            $prefix.'institution' => ['required', 'string', 'min:3'],
            $prefix.'location' => ['required', 'string', 'min:3'],
            $prefix.'year' => ['required', 'numeric', 'min:1970', 'max:'.date('Y')],
        ];
    }
}
