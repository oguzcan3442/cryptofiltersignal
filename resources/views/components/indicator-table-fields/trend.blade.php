<td style="font-weight: bold;
        @php
            if($result[0]["result"]["trend"] == "DOWNTREND"){
                echo 'color: red;';
            }
            elseif($result[0]["result"]["trend"] == "UPTREND"){
                echo 'color: green;';
            }
        @endphp
    ">
    {{ Str::upper($result[0]["result"]["trend"]) }}
</td>
