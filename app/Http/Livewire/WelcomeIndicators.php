<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class WelcomeIndicators extends Component
{
    public function render()
    {
        $result_arr = Cache::get('welcome');
        return view('livewire.welcome-indicators', ['result_arr'=>$result_arr]);
    }
}
