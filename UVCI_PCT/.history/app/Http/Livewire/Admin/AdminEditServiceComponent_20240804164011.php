<?php

namespace App\Http\Livewire\Admin;
use App\Models\Service;
use App\Models\ServiceCategory;
use Carbon\Carbon;
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

    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=> 'required',
            'slug'=> 'required',
            'tagline'=> 'required',
            'service_category_id'=> 'required',
            'price'=> 'required',
            'description'=> 'required',
            'inclusion'=> 'required',
            'exclusion'=> 'required'
                ]);
                if($this->newthumbnail){
                    $this->valida
                }
    }

    public function updateService(){
        $service = new Service();
        $service -> name = $this-> name;
        $service -> slug = $this->slug;
        $service -> description = $this->description;
        $service -> price = $this->price;
        $service -> tagline = $this->tagline;
        $service -> service_category_id = $this->service_category_id;
        $service -> discount = $this->discount;
        $service -> discount_type = $this->discount_type;
        $service -> inclusion = str_replace("\n",'|', trim($this->inclusion));
        $service -> exclusion = str_replace("\n",'|', trim($this->exclusion));

        $imageName = Carbon::now()->timestamp . '.' . $this->thumbnail->extension();
        $this->thumbnail->storeAs('services/thumbnails', $imageName);
        $service -> thumbnail = $imageName;

        $imageName2 = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('services', $imageName2);
        $service -> image = $imageName2;

        $service-> save();
        session()->flash('message', 'Service has been created successfully !');


        $service = Service::where('slug',$this->slug)->first();
        $service->name=$this->name;
        $service->slug=$this->slug;
        $service->tagline=$this->tagline;
        $service->service_category_id=$this->service_category_id;
        $service->price=$this->price;
        $service->discount=$this->discount;
        $service->discount;
    }
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-edit-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
