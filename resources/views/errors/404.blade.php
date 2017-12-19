@extends('layouts.master-normal-others')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div align="center">
            <div class="display-1">404</div>
            <div class="display-3">Página no encontrada</div><hr>
            <div><h5>
                Lo sentimos pero la página que estás buscando no existe en nuestro sitio web.<br><br>
                    <b>Verito Pasticcere.</b> <i>Todos los derechos reservados.</i></h5>
            </div><br>
            <div>
                <a href="{{route('home')}}">www.verito.com</a>
            </div>
        </div>
    </div>
</div>
@endsection