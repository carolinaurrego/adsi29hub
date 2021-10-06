<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models;

use  App\Models\registra;

class RegistrouController extends Controller
{
    public function store(request $request){

           $nuevo= new registra;
           $nuevo->nombre =$request->nom;
           $nuevo->apellido =$request->ape;
           $nuevo->correo =$request->email;
           $nuevo->contrasena =$request->pass;


           $nuevo->save();


           return view('formularioregistro');


    }
}
