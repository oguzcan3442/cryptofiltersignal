<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndicatorHeader extends Component
{
    public $indicatorTitle;
    public function render()
    {
        return view('livewire.indicator-header');
    }
}
