<div>
    <div class="table-responsive">
        <table class="strategy-table table table-striped table-hover">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Coin</th>
                <th scope="col">Exchange</th>
                <th scope="col">Timeframe</th>
                <th scope="col">Type</th>
                <th scope="col">Link</th>
                <th scope="col">Chart</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tableResults as $result)
                <tr>
                    @php
                        $value = explode("_", $result[0]["id"]);
                    @endphp
                    <th scope="row">{{$tablePage}}</th>
                    <td>{{$value[1]}}</td>
                    <td>{{ Str::upper($value[0]) }}</td>
                    <td>{{$value[2]}}</td>
                    @php $segmentName = 'indicator-'.$pathName; @endphp
                    <x-dynamic-component :component="'indicator-table-fields.'.$segmentName" class="mt-4" :result="$result" />
                    <td><a href="https://tr.tradingview.com/symbols/{{str_replace("/", "", $value[1])}}/?exchange=BINANCE" target="_blank">Open in Tradingview</a></td>
                    <td><button class="btn-primary" style="padding: 5px 12.5px; border-radius: 2.5px;">Chart</button></td>
                </tr>
                @php $tablePage++; @endphp
            @endforeach
            </tbody>
        </table>
    </div>
    @php $myRequest = request()->all(); @endphp
    <div class="row text-center" style="width: max-content; margin: auto">
        <div class="col-md-12">
            <ul class="pagination pagination-lg">
                <li class="
                    @php
                        if(isset($tableFilter[0]["page"])){
                            if($tableFilter[0]["page"] != 2){
                                echo "active";
                            }
                        }else{
                            echo "active";
                        }
                    @endphp
                "><a style="cursor:pointer;" wire:click="setPage(1, '{{ serialize($myRequest) }}')">1 <span class="sr-only">(current)</span></a></li>
                <li class="
                    @php
                        if(isset($tableFilter[0]["page"])){
                            if($tableFilter[0]["page"] == 2){
                                echo "active";
                            }
                            else{
                                echo "";
                            }
                        }
                    @endphp
                "><a style="cursor:pointer;" wire:click="setPage(2, '{{ serialize($myRequest) }}')">2</a></li>
                <!--<li><a href="#"><span class="fa fa-angle-right"></span></a></li>-->
            </ul>
        </div>
    </div>
</div>
