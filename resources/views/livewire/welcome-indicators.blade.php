<div>
    <div class="table-responsive">
        <table class="table table-dark table-bordered">
            <thead style="color: #495057; background-color: #e9ecef;">
                <tr>
                    <th scope="col">COIN/USDT</th>
                    <th scope="col">SuperTrend</th>
                    <th scope="col">Fibonacci Retracement</th>
                    <th scope="col">RSI</th>
                </tr>
            </thead>
            <tbody style="font-weight: bold;">
                @foreach($result_arr as $key => $result)
                    <tr>
                        <th scope="row">{{$key}}</th>
                        <td style="
                            @php
                                if($result[0]["result"]["valueAdvice"] == "short"){
                                    echo "color: red;";
                                }
                                elseif($result[0]["result"]["valueAdvice"] == "long"){
                                    echo "color: green;";
                                }
                            @endphp
                        ">
                            {{ Str::upper($result[0]["result"]["valueAdvice"]) }}
                        </td>
                        <td style="
                                @php
                                    if($result[1]["result"]["trend"] == "DOWNTREND"){
                                        echo "color: red;";
                                    }
                                    elseif ($result[1]["result"]["trend"] == "UPTREND"){
                                        echo "color: green;";
                                    }
                                @endphp
                        ">
                            {{ Str::upper($result[1]["result"]["trend"]) }}
                        </td>
                        @php
                            if( $result[2]["result"]["value"] <= 30 ){
                               echo '
                                <td style="color: red;">
                                   Aşırı Satım Bölgesi
                                </td>
                               ';
                            }
                            elseif ($result[2]["result"]["value"] >= 70){
                                echo '
                                <td style="color: green;">
                                   Aşırı Alım Bölgesi
                                </td>
                               ';
                            }
                            else{
                                echo '
                                <td>
                                   '.$result[2]["result"]["value"].'
                                </td>
                               ';
                            }
                        @endphp

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
