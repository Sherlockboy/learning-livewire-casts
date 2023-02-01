<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Sherlock';

    public function mount(Request $request, $name)
    {
        $this->name = $request->input('name', $name);
    }

    public function updatedName($name)
    {
        $this->name = strtolower($name);
    }
    
    public function render()
    {
        return view('livewire.hello-world');
    }
}
