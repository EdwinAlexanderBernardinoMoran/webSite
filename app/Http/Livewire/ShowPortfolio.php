<?php

namespace App\Http\Livewire;

use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowPortfolio extends Component
{
    public $name = '';
    public $email = '';
    public $number = '';
    public $body = '';

    public function submitForm(){
        $dato = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'body' => 'required',
        ]);

        $correo = new contactMail($dato, $dato['email']);

        Mail::to('edwinalexanderbernardinomoran@gmail.com')->send($correo);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.show-portfolio');
    }
}
