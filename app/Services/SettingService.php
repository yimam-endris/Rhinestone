<?php

namespace App\Services;

use App\Models\Setting;

class SettingService
{
    /**
     * Get the setting values for a certain setting from the
     * database
     *
     * @return array
     * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
     */
    public function get(string $key)
    {
        //  Get all the settings
        $settings = Setting::with('values')->get();

        //  Get only one setting
        $setting = $settings->where('key', $key)->first();

        //  If no setting has been defined return null
        if(!$setting) return null;

        //  Get the setting values
        $values = $setting->values;

        //   Detect if the setting is a multiple or single setting
        return $setting->isType('single')
            ? $values->first()->name ?? null
            : $values?->pluck('name')?->toArray();
    }
}
