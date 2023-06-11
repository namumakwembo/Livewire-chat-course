<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{


    public function message($userId)
    {


            $createdConversation= Conversation::updateOrCreate(['sender_id'=>auth()->id(),'receiver_id'=>$userId]);

            return redirect()->route('chat',['query'=>$createdConversation->id]);

    }

    public function render()
    {

        return view('livewire.users',['users'=>User::all()]);
    }
}
