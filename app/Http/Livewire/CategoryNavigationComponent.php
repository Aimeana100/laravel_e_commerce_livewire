<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoryNavigationComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category-navigation-component', ['categories'=>$categories]);
    }
}
