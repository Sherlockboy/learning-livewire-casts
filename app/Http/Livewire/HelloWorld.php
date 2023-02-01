<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Sherlock', 'John', 'Suzan'];

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function refreshChildren()
    {
        $this->emit('refreshChildren');
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
