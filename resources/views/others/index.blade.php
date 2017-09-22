@extends('layouts.master-normal')

@section('content45')
<div class="myBody">
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
            </div>
        @endif
        <div class="content">
            <div class="title m-b-md">
                <span style="font-family: 'Dancing Script', cursive;"><b>¡¡¡Verito Pasticcere!!!!!</b></span>
            </div>

            <div class="links">
                <a href="{{route('all-products')}}">Todos los productos</a>
                <a href="{{route('about-us')}}">Sobre nosotros</a>
                <a href="{{route('clients')}}">Clientes</a>
                <a href="{{route('contact')}}">Contacto</a>
            </div>
        </div>
    </div>
</div>
@endsection