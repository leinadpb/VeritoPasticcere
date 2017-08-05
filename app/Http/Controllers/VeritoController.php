<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeritoController extends Controller
{
    //
    public function index(){

        return view('others.index');
    }
    public function clientes(){

        return view('others.clientes');
    }
    public function contacto(){

        return view('others.contacto');
    }
    public function sobre_nosotros(){

        return view('others.sobre-nosotros');
    }
    public function todos_los_productos(){

        return view('others.todos-los-productos');
    }

    public function saveProduct(Request $request){
        return response()->json($request);
    }
}
