<div>
    <form method="post" class="filter-form">
        @csrf
        <div class="strategy-filter">
            <div class="filter-div">
                <label>Exchange</label>
                <select class="form-select form-control mb-no" aria-label="Exchance" name="exchange">
                    <option value="binance" selected=""> binance</option>
                </select>
            </div>
            <div class="filter-div">
                <label>Time Frame</label>
                <select class="form-select form-control mb-no" aria-label="Time Frame" name="time-frame">
                    <option value="15m"
                        @php
                            if(isset(request()->all()["time-frame"])){
                                if(request()->all()["time-frame"] == "15m"){
                                    echo "selected";
                                }
                            }
                        @endphp
                    > 15m</option>
                    <option value="30m"
                        @php
                            if(isset(request()->all()["time-frame"])){
                                if(request()->all()["time-frame"] == "30m"){
                                    echo "selected";
                                }
                            }
                        @endphp
                    > 30m</option>
                    <option value="1h"
                        @php
                            if(isset(request()->all()["time-frame"])){
                                if(request()->all()["time-frame"] == "1h"){
                                    echo "selected";
                                }
                            }
                        @endphp
                    > 1h</option>
                    <option value="4h"
                        @php
                            if(isset(request()->all()["time-frame"])){
                                if(request()->all()["time-frame"] == "4h"){
                                    echo "selected";
                                }
                            }
                        @endphp
                    > 4h</option>
                    <option value="1d"
                        @php
                            if(isset(request()->all()["time-frame"])){
                                if(request()->all()["time-frame"] == "1d"){
                                    echo "selected";
                                }
                            }
                        @endphp
                    > 1d</option>
                </select>
            </div>
            @php $segmentName = Request::segment(1).'-'.Request::segment(2); @endphp
            <x-dynamic-component :component="'indicator-filter-fields.'.$segmentName" class="mt-4" />
            <div class="filter-div">
                <label>Lenght</label>
                <input class="form-control mb-no" type="text" value="10">
            </div>
        </div>
        <div class="filter-div">
            <button type="submit" class="btn-alt" style="width: 100%; height: 50px;">Scan</button>
        </div>
    </form>
    <br>
</div>
