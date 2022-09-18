<?php

namespace App\Services;

/**
 * Class TaapiService.
 */
class TaapiService
{
    public static function taapiRequest($page, $indicator, $time)
    {
        // Define endpoint
        $url = "https://api.taapi.io/bulk";
        // Create curl resource
        $ch = curl_init( $url );
        if($page == 1){
            $coin_arr = [
                "BTC/USDT",
                "ETH/USDT",
                "XRP/USDT",
                "LTC/USDT",
                "XMR/USDT"
            ];
        }
        if($page == 2){
            $coin_arr = [
                "ADA/USDT",
                "FARM/USDT",
                "XNO/USDT",
                "WOO/USDT",
                "SNX/USDT"
            ];
        }

        // Setup query with JSON payload to be sent via POST.
        foreach($coin_arr as $coin){
            $query = json_encode( (object) array(
                "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbHVlIjoiNjMyMGFlYmFmYzVhOGFkZmVjNzYyYjI2IiwiaWF0IjoxNjYzMDk1NTM0LCJleHAiOjMzMTY3NTU5NTM0fQ.-xPB8HrJmrQmfMUu1oIZ-0aPy4rlaD-PXhq5TQ_ts5E",
                "construct" => (object) array(
                    "exchange" => "binance",
                    "symbol" => $coin,
                    "interval" => $time,
                    "indicators" => array(
                        (object) array(
                            "indicator" => $indicator
                        )
                    )
                )
            ));
            $query_arr[] = $query;
        }
        $result_arr = array();
        $fca_control = 0;
        foreach($query_arr as $query){
            // Add query to CURL
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $query );

            // Define the content-type to JSON
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            // Return response instead of printing.
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

            // Send request.
            $result = curl_exec($ch);

            $fake_coin_arr = $coin_arr[$fca_control];
            $fca_control++;
            $result_arr[$fake_coin_arr] = json_decode($result, true)["data"];
            // Close curl resource to free up system resources
            curl_close($ch);
        }

        /*
        if(count($request) > 0){
            $result_arr = collect($result_arr)->filter(function ($item) use(&$request){
                if(isset($request["value-advice"])){
                    return $item[0]["result"]["valueAdvice"] == $request["value-advice"];
                }
            });
        }
        */
        return $result_arr;
    }
    public static function welcomeTaapiRequest()
    {
        // Define endpoint
        $url = "https://api.taapi.io/bulk";
        // Create curl resource
        $ch = curl_init( $url );
        $coin_arr = [
            "BTC/USDT",
            "ETH/USDT",
            "XRP/USDT",
            "LTC/USDT",
            "XMR/USDT"
        ];
        // Setup query with JSON payload to be sent via POST.
        foreach($coin_arr as $coin){
            $query = json_encode( (object) array(

                "secret" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbHVlIjoiNjMyMGFlYmFmYzVhOGFkZmVjNzYyYjI2IiwiaWF0IjoxNjYzMDk1NTM0LCJleHAiOjMzMTY3NTU5NTM0fQ.-xPB8HrJmrQmfMUu1oIZ-0aPy4rlaD-PXhq5TQ_ts5E",
                "construct" => (object) array(
                    "exchange" => "binance",
                    "symbol" => $coin,
                    "interval" => "1h",
                    "indicators" => array(
                        (object) array(
                            "indicator" => "supertrend"
                        ),
                        (object) array(
                            "indicator" => "fibonacciretracement",
                        ),
                        (object) array(
                            "indicator" => "rsi",
                        )

                    )
                )

            ));
            $query_arr[] = $query;
        }
        $result_arr = array();
        $fca_control = 0;
        foreach($query_arr as $query){
            // Add query to CURL
            curl_setopt( $ch, CURLOPT_POSTFIELDS, $query );

            // Define the content-type to JSON
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            // Return response instead of printing.
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

            // Send request.
            $result = curl_exec($ch);

            $fake_coin_arr = $coin_arr[$fca_control];
            $fca_control++;
            $result_arr[$fake_coin_arr] = json_decode($result, true)["data"];
            // Close curl resource to free up system resources
            curl_close($ch);
        }
        #print_r($result_arr);
        return $result_arr;
    }
}
