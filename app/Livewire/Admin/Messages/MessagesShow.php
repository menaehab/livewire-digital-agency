<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    protected $listeners = ['messageShow'];
    public $message;
    public $name;
    public $email;
    public $subject;
    public $messageText;
    public $status;
    public function messageShow($id)
    {
        $this->message = Message::findOrFail($id);
        $this->name = $this->message->name;
        $this->email = $this->message->email;
        $this->subject = $this->message->subject;
        $this->messageText = $this->message->message;
        $this->status = $this->message->status;
        $this->dispatch('showModalToggle');
    }

    public function render()
    {
        return view('livewire.admin.messages.messages-show');
    }
}
