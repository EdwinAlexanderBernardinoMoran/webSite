<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function store(Request $request){
        return response()->json(['mensaje' => 'Formulario enviado con éxito']);
    }
}
