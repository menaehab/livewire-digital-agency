<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceShow extends Component
{
    protected $listeners = ['serviceShow'];
    public $service;
    public $name;
    public $icon;
    public $description;
    public function serviceShow($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->icon = $this->service->icon;
        $this->description = $this->service->description;
        $this->dispatch('showModalToggle');
    }
    public function render()
    {
        return view('livewire.admin.services.service-show');
    }
}
