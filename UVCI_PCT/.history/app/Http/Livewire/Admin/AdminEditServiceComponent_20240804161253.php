<?php

namespace App\Http\Livewire\Admin;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

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
    public $newimage;

    public function mount($service_slug){
        $service = Service::where('slug',$service_slug)->first();
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-component')->layout('layouts.base');
    }
}
