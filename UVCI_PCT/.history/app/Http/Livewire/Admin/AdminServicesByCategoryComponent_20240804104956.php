<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminServicesByCategoryComponent extends Component
{
    public $category_slug;
    public function mount($category_slug){
        $this->category_slug = $category_slug;
    }
    public function render()
    {
        $category = ServiceCategory::where('slug',$this->category_slug)->
        return view('livewire.admin.admin-services-by-category-component')->layout('layouts.base');
    }
}
