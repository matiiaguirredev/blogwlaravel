<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller{
    public $subject = "Info de contacto";

    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){

        $request->validate([
            'nombre'=> 'required|min:3',
            'correo'=> 'required|email',
            'mensaje'=> 'required|min:10'
        ]);

        $correo = new ContactanosMailable($request->all());

        Mail::to('matiasagui93@gmail.com')->send($correo);

        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');
    }
}
