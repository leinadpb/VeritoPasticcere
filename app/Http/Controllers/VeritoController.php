<?php

namespace App\Http\Controllers;

use App\Products;
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
        //return response()->json($request);
        $title = $request->input('title');
        $category = $request->input('category');
        $decoration = $request->input('decoration');
        $colors = $request->input('colors');
        $pounds = $request->input('pounds');
        $fill = $request->input('fill');
        $description = $request->input('description');
        $mainImage = $request->input('mainImage');

        $product = new Products([
            'title' => $title,
            'category' => $category,
            'decoration' => $decoration,
            'colors' => $colors,
            'pounds' => $pounds,
            'fill' => $fill,
            'description' => $description,
            'mainImage' => $mainImage
        ]);

        $product->save();

        return redirect()->route('all-products');

    }
}
