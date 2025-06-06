<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{
    public $name;
    public $count;
    public $icon;

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'count' => 'required|numeric|min:1',
            'icon' => 'required|string|max:255',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();
        Counter::create([
            'name' => $this->name,
            'count' => $this->count,
            'icon' => $this->icon,
        ]);
        $this->dispatch('createModalToggle');
        $this->dispatch('refreshCountersTable');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.counters.counters-create');
    }
}
