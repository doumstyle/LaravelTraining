<?php

namespace App\Utilities;

use Datetime;

class Date
{
    public static function isWeekend()
    {
        return (new Datetime)->format('N') >= 6;
    }
}