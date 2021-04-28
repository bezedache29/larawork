<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Job extends Component
{

    public $job;

    public function addLike()
    {
        if (Auth::check()) {
            Auth::user()->likes()->toggle($this->job->id);
        } else {
            $this->emit('message', 'Merci de vous connecter pour ajouter une mission à vos favoris', 'error');
            // session()->flash('error', 'Merci de vous connecter pour ajouter une mission à vos favoris');
        }
    }

    public function render()
    {
        return view('livewire.job');
    }
}
