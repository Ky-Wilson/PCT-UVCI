<?php

namespace App\Http\Livewire\Admin;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServicesComponent extends Component
{
    use WithPagination;
    public function deleteService($service_id){
        $service = Service
        if($service->thumbnail){
            unlink('images/services/thumbnails'.'/'. $services->thumbnail);
        }
    }
    public function render()
    {
        $services = Service::paginate(10);
        return view('livewire.admin.admin-services-component', ['services'=>$services])->layout('layouts.base');
    }
}
