<?php

namespace App\Livewire\Admin\Subscribers;

use Livewire\Component;
use App\Models\Subscriber;

class SubscribersDelete extends Component
{
    public $subscriber;
    protected $listeners = ['subscriberDelete'];
    public function subscriberDelete($id)
    {
        $this->subscriber = Subscriber::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->subscriber->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshSubscribersTable');
    }
    public function render()
    {
        return view('livewire.admin.subscribers.subscribers-delete');
    }
}