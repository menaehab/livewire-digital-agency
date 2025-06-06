<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshServicesTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $services = Service::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.services.service-table', compact('services'));
    }
}