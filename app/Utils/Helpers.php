<?php

use App\Services\SettingService;
use Carbon\Carbon;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

/**
 * Prettify text.
 *
 * @param string $text
 * @return string
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function prettify($text): ?string
{
    return ucwords(str_replace('-', ' ', str_replace('_', ' ', strtolower($text))));
}

/**
 * Format numbers
 * @author Alvin Gichira Kaburu <geekaburu@amprest.co.ke>
 * @param integer|double|float $number
 * @return string
 */
function numeric($number): ?float
{
    return !is_null($number) && is_numeric($number)
        ? number_format($number, 2, '.', '')
        : $number;
}

/**
 * Format a text into currency format.
 *
 * @param int|float|double $number
 * @param string|null $currency
 * @return string
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function currency($number, $currency = 'KES'): ?string
{
    //  Define the currency from the settings
    $currency = setting('currency') ?? $currency;

    //  Format as a currency
    return !is_null($number) && is_numeric($number)
        ? $currency . ' ' . number_format($number, 2, '.', ',')
        : $number;
}

/**
 * Format dates to a global date format.
 *
 * @param string $date
 * @return string
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function format_date($date): ?string
{
    return $date
        ? Carbon::parse($date)->format('d M Y')
        : $date;
}

/**
 * Format dates to a global date time format.
 *
 * @param string $date
 * @return string
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function format_date_time($date): ?string
{
    return $date
        ? Carbon::parse($date)->format('d M Y H:i:s')
        : $date;
}

/**
 *  Format dates to a global format.
 *
 * @param string $date
 * @return string
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function format_humans($date): ?string
{
    return $date
        ? Carbon::parse($date)->diffForHumans()
        : $date;
}

/**
 *  Return an error bag instance
 *
 * @param string $value
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function bag($value): HtmlString
{
    return new HtmlString('<input type="hidden" name="_bag" value="'.$value.'">');
}

/**
 *  Return the setting value(s) of a particular setting
 *
 * @param string|array $value
 * @author Alvin G. Kaburu <geekaburu@amprest.co.ke>
 */
function setting($key)
{
    //  Resolve the setting service instance from the service controller
    $settings = new SettingService();

    //  Return the setting value
    return $settings->get($key);
}
