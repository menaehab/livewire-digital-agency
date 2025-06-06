<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshCountersTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $counters = Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.counters.counters-table', compact('counters'));
    }
}
