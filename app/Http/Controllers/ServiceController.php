<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    // public function listado(){
    //     echo "llegue bien";exit;
    // }

    public function listarTodo(){
        $services=Service::all();
        return view('services',compact('services'));
    }

    public function mostrarPorId($id){

        $service=Service::find($id);
        return view('perfil',compact('service'));

    }
}
