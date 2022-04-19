<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Http\tools\CalculoCUIL;
use App\Models\persona_test;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $botones_home=[
            ['url'=>'#','cuerpo'=> 'Registrarse como','strong'=> 'Ciudadano'],
            ['url' => '#', 'cuerpo' => 'Registrarse como', 'strong' => 'Agente del Ministerio']
        ];
       
        return view('home',['botones'=>$botones_home]);
    }

    public function testLoginCiudadano()
    {
        
        return view('registro.registro_ciudadano');
    }

    public function testCUIL()
    {
        return view('testCUIL');
    }

    public function store(Request $request)
    {
      


        $persona_test=persona_test::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'dni'=>0,
            'cuil'=> CalculoCUIL::calculo_cuil($request->dni,$request->sexo),
        ]);

         return view('testCUILmostrar',['persona'=>$persona_test]);
    }
}
