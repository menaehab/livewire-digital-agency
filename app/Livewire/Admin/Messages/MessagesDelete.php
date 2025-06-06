<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;
    protected $listeners = ['messageDelete'];
    public function messageDelete($id)
    {
        $this->message = Message::findOrFail($id);
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->message->delete();
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshMessagesTable');
    }
    public function render()
    {
        return view('livewire.admin.messages.messages-delete');
    }
}