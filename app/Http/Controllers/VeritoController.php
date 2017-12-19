<?php

namespace App\Http\Controllers;

use App\Client;
use App\Products;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Validator;
use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3;
use Aws;
use League\Flysystem\AwsS3v3\AwsS3Adapter;



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

    public function store(Request $request, $property)
    {

        $file = $request->file($property);
        if(!$file->isValid()) {
           throw new \Exception($file->getErrorMessage());
            //return redirect()->route('add-product')->with('file_too_big' => 'La foto es muy grande.');
        }
        $path = $file->store('veritophotoswebsite/ProductsMain','s3', 'public');
        return $path;
    }
    public function getImage($path){
        return Storage::disk('s3')->url($path);
    }

    public function saveProduct(Request $request){
        //return response()->json($request);
        //dd($request->file('mainImage'));
        $title = $request->input('title');
        $category = $request->input('category');
        $decoration = $request->input('decoration');
        $colors = $request->input('colors');
        $pounds = $request->input('pounds');
        $fill = $request->input('fill');
        $description = $request->input('description');

        $mainImage = $request->file('mainImage');

        $path = $this->store($request, 'mainImage');


        $product = new Products([
            'title' => $title,
            'category' => $category,
            'decoration' => $decoration,
            'colors' => $colors,
            'pounds' => $pounds,
            'fill' => $fill,
            'description' => $description,
            'mainImage' => $this->getImage($path)
        ]);

        $product->save();

        return redirect()->route('all-products');

    }

    public function saveClient(Request $r){
        $name = $r->input('name');
        $photo = $r->file('photo');
        $comment = $r->input('comment');

        $path = $this->store($r, 'photo');

        $client = new Client([
            'name' => $name,
            'photo' => $this->getImage($path),
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

    public function sendMail(Request $r){

        $data = [
            'message' => $r->input('msg'),
            'from_email' => $r->input('email'),
            'subject_email' => $r->input('subject'),
            'name_from_email' => $r->input('first-name'),
            'lastname_from_email' => $r->input('last-name')

        ];

        \Mail::to('digrape07@gmail.com')->send(new ContactEmail($data));

        //dd($data);

        //return view('others.contacto', ['success_msg' => "¡El mensaje ha sido enviado satisfactoriamente!"]);

        return redirect()->route('contact')->with('success_msg2', '¡El mensaje ha sido enviado satisfactoriamente!');
       // return redirect()->route('contact', ['success_msg' => '¡El mensaje ha sido enviado satisfactoriamente!']);

    }



    public function deleteProduct($id){

        $product = Products::find($id);
        $product->delete();

        return redirect()->route('all-products')->with('product_deleted', 'El producto ha sido eliminado satisfactoriamente.');
    }

    public function modifyProduct($id){
        $product = Products::find($id);
        return view('admin.modify-product', ['product' => $product]);
    }

    public function modifyProductAction(Request $r, $id){ //mainImage will not be change in these release.
        $product = Products::find($id);
        $product->title = $r->input('title');
        $product->pounds = $r->input('pounds');
        $product->colors = $r->input('colors');
        $product->fill = $r->input('fill');
        $product->decoration = $r->input('decoration');
        $product->category = $r->input('category');
        //$product->mainImage = $r->input('mainImage');

        $product->save();

        return redirect()->route('all-products')->with('modified_product', 'El producto ha sido modificado.');

    }

    public function deleteClient($id){
        $client = Client::find($id);
        $client->delete();

        return redirect()->route('clients')->with('deleted_client', 'El cliente satisfecho ha sido eliminado.');
    }
}
