<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Str;
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
        $this->slug = Str::slug($this->name,"-");
    }
    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=> 'required',
            'slug'=> 'required',
            'tagline'=> 'required',
            'service_category_id'=> 'required',
            'price'=> 'required',
            'image'=> 'nullable|mimes:jpeg,png',
            'thumbnail'=> 'nullable|mimes:jpeg,png',
            'description'=> 'required',
            'inclusion'=> 'required',
            'exclusion'=> 'required'
                ]);
    }
    public function createService(){
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'tagline'=> 'required',
            'service_category_id'=> 'required',
            'price'=> 'required',
            'image'=> 'required|mimes:jpeg,png',
            'thumbnail'=> 'required|mimes:jpeg,png',
            'description'=> 'required',
            'inclusion'=> 'required',
            'exclusion'=> 'required'
                ]);
            $service = new Service();
            $service -> name = $this-> name;
            $service -> slug = $this->slug;
                $service -> description = $this->description;
                $service -> price = $this->price;
                $service -> tagline = $this->tagline;
                
    }
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-add-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
