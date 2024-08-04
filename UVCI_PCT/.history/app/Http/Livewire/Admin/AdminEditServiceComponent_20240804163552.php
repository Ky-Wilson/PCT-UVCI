<?php

namespace App\Http\Livewire\Admin;
use App\Models\Service;
use App\Models\ServiceCategory;
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
        $this->inclusion=str_replace("\n",'|',$service->inclusion);
        $this->exclusion=str_replace("\n",'|',$service->exclusion);
    }

    public function updateService(){
        $this->validate([
            'name'=>'required',
           'slug'=>'required',
            'tagline'=>'required',
           'service_category_id'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'discount_type'=>'required',
            'description'=>'required',
            'inclusion'=>'required',
            'exclusion'=>'required',
            'newthumbnail'=>'nullable|image|max:2048',
            'newimage'=>'nullable|image|max:2048',
        ]);


        $service = Service::where('slug',$this->slug)->first();
        $service->name=$this->name;
        $service->slug=$this->slug;
        $service->tagline=$this->tagline;
        $service->service_category_id=$this->service_category_id;
        $service->price=$this->price;
        $service->discount=$this->discount;
        $service->discount_,
    }
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-edit-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
