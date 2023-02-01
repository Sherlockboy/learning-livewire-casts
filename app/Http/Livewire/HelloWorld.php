<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Sherlock';

    public $loud = false;

    public $greeting = 'Hello';

    public function resetName()
    {
        $this->name = 'No-name';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
