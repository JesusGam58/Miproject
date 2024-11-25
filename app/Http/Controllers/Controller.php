<?php

namespace App\Http\Controllers;

abstract class Controller
{
public function perros(){
    return view ('gatos.perros');
}

public function gato(){
    return view ('gatos.gato');
}

public function pajaro(){
    return view ('gatos.pajaro');
}

public function jijijija(){
    return view ('gatos.jijijija');
}

public function ardilla(){
    return view ('gatos.ardilla');
}

}


