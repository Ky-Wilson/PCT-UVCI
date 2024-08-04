<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Illuminate\Support\Str;
use Livewire\Component;

class AdminAddServiceComponent extends Component
{

    public function generateSlug(){
        $this->slug = Str::slug($this->name,"-");
    }
    public function createService(){
        $this->validate([

    }
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-add-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
