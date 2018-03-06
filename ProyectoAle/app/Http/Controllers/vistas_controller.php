<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistas_controller extends Controller
{

    public function index()
    {
        return View('page1_1');
    }


    public function getName(Request $request)
    {
        $nombre = $request->input("nombre");

        // Guardamos nombre en la cache guardada por 20 min
        \Cache::put('search', $nombre, 20);
        
        return view('page1_2')->with('name',$nombre);
    }



    public function makeBuy()
    {        
        $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('page1_3')->with('name',$name); 
    }

    public function Buy1()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('page1_4')->with('name',$name);
    }

    public function Buy2()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('page1_5')->with('name',$name);
    }

    public function Buy3()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('page1_6')->with('name',$name);
    }


}
