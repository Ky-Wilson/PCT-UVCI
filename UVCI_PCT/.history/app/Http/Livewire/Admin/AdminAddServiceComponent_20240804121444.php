<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;

class AdminAddServiceComponent extends Component
{
    public $name;
    public $slug;
    public $tagline;
    public $service_category_id;
    public $price;
    public $discount;
    public $discount_type;
    public $image;
    public $thumbnail;
    public $description;
    public $inclusion;
    public $exclusion;

    public function generateSlug(){
        $this->slug = Str::slug($this->name."-");
    }
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-add-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
