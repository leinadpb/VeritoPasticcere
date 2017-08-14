@extends('layouts.master-normal-others')

@section('content')
<div class="container">
    <div><h2>Clientes satisfechos</h2></div>
    <hr>
    <div class="row">
        @foreach($clients as $c)
        <!-- Start -->
        <div class="col-lg-4" align="center">
            <img class="rounded-circle" src="{{URL::to('images/leinad.jpg')}}" alt="verito pasticcere | {{$c->name}}" width="140" height="140">
            <h2>{{$c->name}}</h2>
            <p>{{$c->comment}}</p>
        </div><!-- /.col-lg-4 -->
        <!-- End -->
        @endforeach
    </div><!-- /.row -->
</div>
@stop