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
        $this->name=$service->name;
        $this->slug=$service->slug;
        $this->tagline=$service->tagline;
        $this->service_category_id=$service->service_category_id;
        $this->price=$service->price;
        $this->discount=$service->discount;
        $this->discount_type=$service->discount_type;
        $this->image=$service->image;
        $this->thumbnail=$service->thumbnail;
        $this->description=$service->description;
        $this->inclusion=$service->inclusion;
        $this->exclusion=$service->exclusion;
        $slug;
        $tagline;
        $service_category_id;
        $price;
        $discount;
        $discount_type;
        $image;
        $thumbnail;
        $description;
        $inclusion;
        $exclusion;
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-service-component')->layout('layouts.base');
    }
}
