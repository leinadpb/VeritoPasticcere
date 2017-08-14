<?php

namespace App\Http\Controllers;

use App\Client;
use App\Products;
use Illuminate\Http\Request;

class VeritoController extends Controller
{
    //
    public function index(){

        return view('others.cover');
    }
    public function clientes(){

        $c = Client::all();

        return view('others.clientes', ['clients' => $c]);
    }
    public function contacto(){

        return view('others.contacto');
    }
    public function sobre_nosotros(){

        return view('others.sobre-nosotros');
    }
    public function singleProduct($id){
        $product = Products::find($id);
        return view('others.producto', ['product' => $product]);
    }
    public function todos_los_productos(){

        $products = Products::all();
        $msg = "";

        return view('others.todos-los-productos')->with(['products' => $products, 'msg' => $msg]);
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

    public function saveClient(Request $r){
        $name = $r->input('name');
        $photo = $r->input('photo');
        $comment = $r->input('comment');
        $client = new Client([
            'name' => $name,
            'photo' => $photo,
            'comment' => $comment
        ]);
        $client->save();

        return redirect()->route('clients');
    }
    public function search(Request $request){

        $search = explode(" ", strtolower($request->input('search-text')));
        $products = Products::all();
        $query = [];

        foreach($products as $p){
            $words = explode(" ", strtolower($p->title));
            $arr = array_intersect($search, $words);
            if(!empty($arr)){
                array_push($query, $p);
            }
        }

        $msg = "";
        if(empty($query)){
            $msg = "No se encontraron resultados.";
        }else{
            $msg = count($query) . " resultado(s) obtenidos.";
        }

        return view('others.todos-los-productos', ['products' => $query, 'msg' => $msg]);

    }
}
