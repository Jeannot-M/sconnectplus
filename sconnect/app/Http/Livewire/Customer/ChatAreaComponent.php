<?php

namespace App\Http\Livewire\Customer;

use App\Models\Chating;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatAreaComponent extends Component
{

    public String $content = "";
    public $receiver;
    public $current_user;
    public $message;
    public $thread;
    public $receiver_id;

    public function submitMessage() 
    {
        $this->validate([
            'message' => "required|string"
        ]);

        // $this->validate();

        $thread_value = $this->current_user . '-' .$this->receiver;

        if($this->thread = 0){
            Chating::create([
                'thread' => $thread_value,
                'message' => $this->message,
                'receiver_id' => $this->receiver,
                'sender_id' => $this->current_user
            ]);
        }else{
            Chating::create([
                'thread' => $thread_value,
                'message' => $this->message,
                'receiver_id' => $this->receiver,
                'sender_id' => $this->current_user
            ]);
        }
        
               

        $this->reset();
    }

    public function render()
    {

        // All variables
        $user = Auth::user()->id;

        $receiver = $this->receiver;

        $current = User::find($receiver);

        // get all chats
        $messages = Chating::where('thread', $user.'-'.$receiver)->orWhere('thread', $receiver.'-'.$user)->get();

        return view('livewire.customer.chat-area-component', [
            'messages' => $messages,
            'user' => $user,
            // 'messages' => $messages
        ]);
    }
}
