<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class IndicatorController extends Controller
{
    public function indicatorFunction($page, $request, $pathName){
        if($pathName == "supertrend"){
            return IndicatorController::superTrend($page, $request);
        }
        if($pathName == "fibonacci"){
            return IndicatorController::fibonacci($page, $request);
        }
    }

    public function superTrendView()
    {
        return view('/indicators/supertrend');
    }
    public static function superTrend($page, $request)
    {
        $timeFrame = "15m";
        if(isset($request["time-frame"])){
            $timeFrame = $request["time-frame"];
        }
        $indicator = "supertrend";

        $result_arr = Cache::get('indicator_supertrend_'.$timeFrame.'_page'.$page);
        if(count($request) > 0){
            $result_arr = collect($result_arr)->filter(function ($item) use(&$request){
                if(isset($request["value-advice"])){
                    return $item[0]["result"]["valueAdvice"] == $request["value-advice"];
                }
                return true;
            });
        }
        return $result_arr;
    }

    public function fibonacciView()
    {
        return view('/indicators/fibonacci');
    }
    public static function fibonacci($page, $request){
        $timeFrame = "15m";
        if(isset($request["time-frame"])){
            $timeFrame = $request["time-frame"];
        }
        $indicator = "fibonacciretracement";

        $result_arr = Cache::get('indicator_fibonacciretracement_'.$timeFrame.'_page'.$page);
        if(count($request) > 0){
            $result_arr = collect($result_arr)->filter(function ($item) use(&$request){
                if(isset($request["trend"])){
                    return $item[0]["result"]["trend"] == $request["trend"];
                }
                return true;
            });
        }
        return $result_arr;
    }
}
