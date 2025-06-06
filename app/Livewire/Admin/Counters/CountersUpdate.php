<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    protected $listeners = ['counterUpdate'];
    public $counter;
    public $name;
    public $count;
    public $icon;
    public function counterUpdate($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
    }
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
        $this->counter->update([
            'name' => $this->name,
            'count' => $this->count,
            'icon' => $this->icon,
        ]);
        $this->dispatch('updateModalToggle');
        $this->dispatch('refreshCountersTable');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.admin.counters.counters-update');
    }
}