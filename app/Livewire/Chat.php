<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Chat extends Component
{
    public $users;

    public function mount ()
    {
        $this->users = User::whereNot("id", Auth::id())->get();
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
