<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//controlador para una sola ruta
class principalcontroller extends Controller{
    public function __invoke(){
              return "bienvenidos";
    }
}
