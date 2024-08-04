<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminServicesComponent extends Component
{
    public function render()
    {
        $services = Service::paginate(10)
        return view('livewire.admin.admin-servics-component')->layout('layouts.base');
    }
}
