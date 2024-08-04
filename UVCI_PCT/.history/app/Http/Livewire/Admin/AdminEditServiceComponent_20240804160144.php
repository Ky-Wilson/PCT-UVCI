<?php

namespace App\Http\Livewire\Admin;
use Livewire\WithFileUploads;
use Livewire\Component;

class AdminEditServiceComponent extends Component
{
    use WithFileUploads;
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

    public $newthumbnail;
    public $newi

    public function render()
    {
        return view('livewire.admin.admin-edit-service-component')->layout('layouts.base');
    }
}
