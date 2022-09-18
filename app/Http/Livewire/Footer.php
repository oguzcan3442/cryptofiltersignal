<?php

namespace App\Http\Livewire;

use App\Http\Controllers\BlogController;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $recentBlogs = app(BlogController::class)->recentBlogs(2);
        return view('livewire.footer', ['recentBlogs'=>$recentBlogs]);
    }
}
