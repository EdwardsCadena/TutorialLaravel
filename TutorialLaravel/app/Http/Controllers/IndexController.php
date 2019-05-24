<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Home(){
        $titulo='Inicio';
        return view('home',compact('titulo'));
    }
    public function Requerimiento(){
        $titulo='Requesitos';
        return view('requerimientos',compact('titulo'));
    }
    public function Instalacion(){
        $titulo='Instalacion de laravel';
        return view('Install',compact('titulo'));
    }
    public function comandos()
    {
        $titulo='Comandos de Laravel';
        return view('Comandos',compact('titulo'));
    }
}
