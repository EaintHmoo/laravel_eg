<?php

namespace App\Traits;

use App\Models\CurrencyRate;

trait Conveter
{
    public static function stringToArray($string, $separater)
    {
        $arr = explode($separater, $string);
        return $arr;
    }
    public static function modelName($string)
    {
        $arr = parent::stringToArray($string, '\\');
        if ($arr[count($arr) - 1] == 'Sparepart') {
            return 'Spare Part';
        } elseif ($arr[count($arr) - 1] == 'Interline') {
           return 'Interlining';
        } elseif ($arr[count($arr) - 1] == 'DoubleTape') {
            return 'Double Tape';
        } else {
            return $arr[count($arr) - 1];
        }
    }
    public static function todayCurrency()
    {
        $today_currency = CurrencyRate::whereDate('date', date('Y-m-d'))->orderby('created_at', 'desc')->first();
        $latest_currency = CurrencyRate::orderby('date', 'desc')->orderby('created_at', 'desc')->first()->rate ?? 0;
        return $today_currency->rate ?? $latest_currency;
    }
}
