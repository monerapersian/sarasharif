<?php

use Morilog\Jalali\Jalalian;

if (! function_exists('jalali')) {

    function jalali($date, $format = '%d %B %Y')
    {
        if (!$date) {
            return '---';
        }

        $result = Jalalian::fromDateTime($date)->format($format);

        return strtr($result, [
            '0' => '۰',
            '1' => '۱',
            '2' => '۲',
            '3' => '۳',
            '4' => '۴',
            '5' => '۵',
            '6' => '۶',
            '7' => '۷',
            '8' => '۸',
            '9' => '۹',
        ]);
    }

}