<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminServicesByCategoryComponent extends Component
{
    public $category_slug;
    
    public function render()
    {
        return view('livewire.admin.admin-services-by-category-component')->layout('layouts.base');
    }
}
