<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;
    protected $listeners = ['counterDelete'];
    public function counterDelete($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->counter->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshCountersTable');
    }
    public function render()
    {
        return view('livewire.admin.counters.counters-delete');
    }
}
