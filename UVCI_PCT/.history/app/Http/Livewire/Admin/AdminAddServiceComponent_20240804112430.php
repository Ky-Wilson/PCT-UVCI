<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminAddServiceComponent extends Component
{
    public function render()
    {
        $categories = ServiceCategoy::all();
        return view('livewire.admin.admin-add-service-component',[])->layout('layouts.base');
    }
}
