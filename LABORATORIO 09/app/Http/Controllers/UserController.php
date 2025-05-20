<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // Aquí puedes hacer lo que quieras: devolver texto, una vista o datos
        return 'Hola desde UserController@index';
    }
    public function show()
    {
        return 'Hola desde UserController@show';
    }
    public function showProfile()
    {
        // Generar la URL para el perfil del usuario con ID 1
        $url = route('profileid', ['id' => 1]);
        
        // Pasar la URL generada a la vista
        return view('profile2', ['url' => $url]);
    }
}