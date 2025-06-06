<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesTable extends Component
{
    use WithPagination;
    public $search;
    protected $listeners = ['refreshMessagesTable' => '$refresh'];
    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $messages = Message::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.admin.messages.messages-table', compact('messages'));
    }
}
