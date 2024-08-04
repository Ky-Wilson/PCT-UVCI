<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;

class AdminServicesByCategoryComponent extends Component
{
    public $category_slug;
    public function mount($category_slug){
        $this->category_slug = $category_slug;
    }
    public function render()
    {
        $category = ServiceCategory::where('slug',$this->category_slug)->first();
        $services = Service::where('service_category_id', $category->id)->;
        return view('livewire.admin.admin-services-by-category-component')->layout('layouts.base');
    }
}
