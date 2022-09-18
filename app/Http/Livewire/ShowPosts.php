<?php

namespace App\Http\Livewire;

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $category;

    public function render()
    {
        return view('livewire.show-posts', [
            'blogs' => Blog::when($this->category)->where("category","=",$this->category)->paginate(10),
            'recentBlogs' => app(BlogController::class)->recentBlogs(),
            'categories' => BlogCategory::all()
        ]);
    }
    public function updatingCategory()
    {
        $this->resetPage();
    }
}
