<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $message;
    public $type;
    
    public $designByType = [
        'error' => 'text-red-700 bg-red-200 border border-red-700',
        'success' => 'text-green-700 bg-green-200 border border-green-700',
        'info' => 'text-blue-700 bg-blue-200 border border-blue-700',
        'warning' => 'text-yellow-700 bg-yellow-200 border border-yellow-700',
    ];

    protected $listeners = ['message' => 'setMessage'];

    public function setMessage($message, $type)
    {
        $this->message = $message;
        $this->type = $type;

        $this->dispatchBrowserEvent('flash-message');
    }

    public function render()
    {
        return view('livewire.message');
    }
}
