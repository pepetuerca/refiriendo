<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; // se va a comunicar con  el modelo Category.php


class CategoriesController extends Controller
{
  public function listarTodo(){

$categorias = Category::all(); //select * from categories
return view("categories", compact("categorias")); //retorno la vista /categories y le paso como parámetro el resultado de la consulta sql en la variable homonima
}
}
