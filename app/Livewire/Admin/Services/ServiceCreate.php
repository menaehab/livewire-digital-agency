<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceCreate extends Component
{
    public $name;
    public $icon;
    public $description;

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
        Service::create([
            'name' => $this->name,
            'icon' => $this->icon,
            'description' => $this->description,
        ]);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshServicesTable');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.services.service-create');
    }
}