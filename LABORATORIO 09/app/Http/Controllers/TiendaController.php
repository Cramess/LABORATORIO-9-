<?php

namespace App\Http\Controllers; use Illuminate\Http\Request;
class TiendaController extends Controller
{
public function index() {
return "Aquí se muestra todo el contenido de tienda";
}
public function create() {
return "Aquí se muestra el entorno de la creación de la tienda";
}
public function show($post) {
return "Aquí se muestra todo el contenido {$post}";
}
}
?>