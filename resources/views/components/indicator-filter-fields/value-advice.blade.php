<div class="filter-div">
    <label>Value Advice</label>
    <select class="form-select form-control mb-no" aria-label="Value Advice" name="value-advice">
        <option value="short"
            @php
                if(isset(request()->all()["value-advice"])){
                    if(request()->all()["value-advice"] == "short"){
                        echo "selected";
                    }
                }
            @endphp
        > Short</option>
        <option value="long"
            @php
                if(isset(request()->all()["value-advice"])){
                    if(request()->all()["value-advice"] == "long"){
                        echo "selected";
                    }
                }
            @endphp
        > Long</option>
    </select>
</div>
