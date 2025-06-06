<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceUpdate extends Component
{
    protected $listeners = ['serviceUpdate'];
    public $service;
    public $name;
    public $icon;
    public $description;
    public function serviceUpdate($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->icon = $this->service->icon;
        $this->description = $this->service->description;
    }
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();
        $this->service->update([
            'name' => $this->name,
            'icon' => $this->icon,
            'description' => $this->description,
        ]);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshServicesTable');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.services.service-update');
    }
}
