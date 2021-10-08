<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistacontroller extends Controller
{
    public function uno(){
        return view ('formulariocontacto');

   }

   public function dos(){
    return view ('formularioregistro');
   }

   public function tres(){

   }

   public function cuatro(){

   }
   public function cinco(){
    return view ('contactenos');

   }
   public function seis(){

   }

   public function siete(){

   }
   public function ocho(){
    return view ('formulariocontacto');
   }
   public function nueve(){
    return view ('iniciosesion');
   }

   public function diez(){
    return view ('formularioregistro');
   }

   public function store(Request $request){
        return $request->all();
   }

   public function once(){

   }
}
