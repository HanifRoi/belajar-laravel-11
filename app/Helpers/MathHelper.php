<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class MathHelper
{
    static function add(int $a, int $b){
        return once(function () use($a, $b){
            Log::info("Adding $a and $b");
            return $a + $b;
        });
    }//kalo parameter sama di panggil 1 kali
}
