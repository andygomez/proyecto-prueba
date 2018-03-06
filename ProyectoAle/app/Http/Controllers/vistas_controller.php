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
        $combo1 = '';
        $combo2 = '';
        $combo3 = '';
        $combo4 = '';

        $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('page1_3')->with('name',$name); 
    }

    public function Buy1()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('iframepago')->with('name',$name);
    }

    public function Buy2()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('iframepago2')->with('name',$name);
    }

    public function Buy3()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('iframepago3')->with('name',$name);
    }

    public function Buy4()
    {   $name = \Cache::get('search'); //devuelve nombre de la cache
        return view('iframepago4')->with('name',$name);
    }
}
