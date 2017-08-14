@extends('layouts.master-normal-others')

@section('content')
<div class="container">
    <div><h2>Clientes satisfechos</h2></div>
    <hr>
    <div class="row">

        <!-- Start -->
        <div class="col-lg-4" align="center">
            <img class="rounded-circle" src="{{URL::to('images/leinad.jpg')}}" alt="verito pasticcere | Daniel Peña" width="140" height="140">
            <h2>Daniel Peña</h2>
            <p>Estoy contento con mi bizcocho, a mis familiares y amigos les ha encantado! Agradecido con Verito Pasticcere.</p>
        </div><!-- /.col-lg-4 -->
        <!-- End -->

    </div><!-- /.row -->
</div>
@stop