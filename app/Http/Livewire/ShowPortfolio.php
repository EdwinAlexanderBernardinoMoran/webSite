<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPortfolio extends Component
{
    public $name = '';
    public $email = '';
    public $number = '';
    public $body = '';

    public function submitForm(){
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'body' => 'required',
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.show-portfolio');
    }
}
