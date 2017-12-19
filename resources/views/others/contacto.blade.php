@extends('layouts.master-normal-others')

@section('content')
    <div class="container-fluid">
        <div align="center"><img class="img-responsive img-fluid img-rounded" src="{{URL::to('images/contact4.jpg')}}" alt="Verito pasticcere, contacto, formulario de contacto"></div>
        <div class="card mb-3">
          <!--  <img class="card-img-top" src="images/contact2.jpg" alt="Card image cap"> -->
            <div class="card-body">
                <div algin="center"><h4 class="card-title">Formulario de contacto</h4></div>
                @if(session()->has('success_msg2'))
                    <div class="alert alert-info">{{ session('success_msg2') }}</div>
                @endif
                @include('partials.formulario-contacto')
            </div>
        </div>
    </div>
@endsection