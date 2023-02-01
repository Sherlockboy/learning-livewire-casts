<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $names = ['Sherlock', 'John', 'Suzan'];

    public function removeName($name)
    {
        $this->names = collect($this->names)
            ->reject(fn ($value) => $value == $name)
            ->all();
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
