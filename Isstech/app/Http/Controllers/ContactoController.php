<?php

namespace App\Http\Controllers;
use App;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //codigo para tener rutas seguras
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function contacto(){
        

        $clip = App\Clip::all();

        
        return view('contacto',compact('clip'));

    }
    public function formContacto(){

        return view('formContacto');
    }





}
