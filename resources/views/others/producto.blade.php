@extends('layouts.master-normal-others')

@section('content')

    <div class="row">

        <div class="col-md-5">
            <a href="#" class="thumbnail">
                <img class="img-responsive" src="{{ $product->mainImage }}" alt="{{ $product->title }}">
            </a>
        </div>

        <div class="col-md-7">
            <div class="des-title"><h3>Descripción</h3></div>
            <hr>
            <div class="description">
                <div class=''>
                    {{ $product->description }}
                </div>
            </div>
        </div>

@endsection