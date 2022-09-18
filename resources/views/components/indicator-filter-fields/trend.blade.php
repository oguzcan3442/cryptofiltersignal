<div class="filter-div">
    <label>Trend</label>
    <select class="form-select form-control mb-no" aria-label="Trend" name="trend">
        <option value="DOWNTREND"
            @php
                if(isset(request()->all()["trend"])){
                    if(request()->all()["trend"] == "DOWNTREND"){
                        echo "selected";
                    }
                }
            @endphp
        > DOWNTREND</option>
        <option value="UPTREND"
            @php
                if(isset(request()->all()["trend"])){
                    if(request()->all()["trend"] == "UPTREND"){
                        echo "selected";
                    }
                }
            @endphp
        > UPTREND</option>
    </select>
</div>
