<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceDelete extends Component
{
    public $service;
    protected $listeners = ['serviceDelete'];
    public function serviceDelete($id)
    {
        $this->service = Service::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->service->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshServicesTable');
    }
    public function render()
    {
        return view('livewire.admin.services.service-delete');
    }
}