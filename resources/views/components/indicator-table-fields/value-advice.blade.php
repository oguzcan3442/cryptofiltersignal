<td style="font-weight: bold;
        @php
            if($result[0]["result"]["valueAdvice"] == "short"){
                echo 'color: red;';
            }
            elseif($result[0]["result"]["valueAdvice"] == "long"){
                echo 'color: green;';
            }
        @endphp
    ">
    {{ Str::upper($result[0]["result"]["valueAdvice"]) }}
</td>
