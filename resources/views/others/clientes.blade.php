@extends('layouts.master-normal-others')
<!--
Getting Clients as $c
-->
@section('content')
<div class="container">
    @if(session()->has('deleted_client'))
        <div class="alert alert-info">{{ session('deleted_client') }}</div>
    @endif
    <div><h2>Clientes satisfechos</h2></div>
    <hr>
    <div class="row">
        @foreach($clients as $c)
        <!-- Start -->
        <div class="col-md-4" align="center">
            <img class="rounded-circle" src="{{URL::to('images/leinad.jpg')}}" alt="verito pasticcere | {{$c->name}}" width="140" height="140">
            <h2>{{$c->name}}</h2>
            <p>{{$c->comment}}</p>
            @if(Auth::check())
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <a class="btn btn-secondary btn-block" href="{{ route('delete-client', ['id' => $c->id]) }}">Eliminar</a>
                        </div>
                    </div>
                </div>
            @endif
        </div><!-- /.col-lg-4 -->
        <!-- End -->
        @endforeach
    </div><!-- /.row -->
</div>
@stop