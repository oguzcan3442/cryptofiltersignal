<?php

namespace App\Http\Livewire;

use App\Http\Controllers\IndicatorController;

use Illuminate\Http\Request;
use Livewire\Component;

class IndicatorTable extends Component
{
    private $tableResults;
    public $pathName;
    public $tablePage;
    public $tableFilter = [];

    public function mount(Request $request)
    {
        $this->tablePage = 1;
        $this->tableResults = app(IndicatorController::class)->indicatorFunction(1, $request->all(), $this->pathName);
    }
    public function setPage($page, $request)
    {
        $request = unserialize($request);
        if($page == 1){
            $this->tablePage = 1;
        }
        if($page == 2){
            $this->tablePage = 6;
        }
        $this->tableFilter = [];
        array_push($this->tableFilter, ["page"=>$page]);
        array_push($this->tableFilter, $request);

        $this->tableResults = app(IndicatorController::class)->indicatorFunction($page, $request, $this->pathName);
    }

    public function render()
    {
        return view('livewire.indicator-table', [
            'tableResults' => $this->tableResults,
            'tableFilter'  => $this->tableFilter,
            'pathName'     => $this->pathName
        ]);
    }
}
