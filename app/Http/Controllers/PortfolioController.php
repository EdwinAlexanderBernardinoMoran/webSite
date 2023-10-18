<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){
        $user = $request->input('user');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $body = $request->input('body');


        $gmail = new contactMail(['user' => $user, 'phone' => $phone, 'body' => $body], $email, $user);
        Mail::to('edwinalexanderbernardinomoran@gmail.com')->send($gmail);

        return response()->json(['mensaje' => 'Formulario enviado con éxito']);
    }

    public function dowloader(){
        return response()->download(public_path('/pdf/Edwin_Alexander_Bernardino_Morán_CV.pdf'));
    }
}
