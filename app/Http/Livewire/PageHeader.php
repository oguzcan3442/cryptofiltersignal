<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageHeader extends Component
{
    public $pageTitle;
    public function render()
    {
        return view('livewire.page-header');
    }
}
