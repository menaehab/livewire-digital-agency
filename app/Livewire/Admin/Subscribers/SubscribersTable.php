<?php

namespace App\Livewire\Admin\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;

class SubscribersTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshSubscribersTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $subscribers = Subscriber::where('email', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.subscribers.subscribers-table',compact('subscribers'));
    }
}
