<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;

class AdminAddServiceComponent extends Component
{
    public
    public function render()
    {
        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-add-service-component',['categories'=>$categories])->layout('layouts.base');
    }
}
