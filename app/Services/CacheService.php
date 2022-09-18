<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

/**
 * Class CacheService.
 */
class CacheService
{
    public static function cacheResults($cacheKey, $time, $variable)
    {
        #dd($cacheKey, $time, $variable);
        return Cache::remember($cacheKey, $time, function () use(&$variable){
            return $variable;
        });
    }
}
