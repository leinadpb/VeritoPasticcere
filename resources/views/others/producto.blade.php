@extends('layouts.master-normal-others')

@section('content')

    <!-- Receiving vars:
           $product,
     -->

    <div class="container-fluid">

        <!-- Other Sections -->
        <div class="row">

            <div class="col-md-1"></div>

            <!-- Slider or single image-->
            <div class="col-md-5">
                @if(Auth::check())
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <a class="btn btn-secondary btn-block" href="{{ route('modify-product', ['id' => $product->id]) }}">Modificar</a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-secondary btn-block" href="{{ route('delete-product', ['id' => $product->id]) }}">Eliminar</a>
                            </div>
                        </div>
                    </div>
                @endif
                @include('others.slider')
            </div>

            <!-- Product Details -->
            <div class="col-md-5">
                @include('others.details')
            </div>

            <div class="col-md-1"></div>

        </div>
    </div>


@stop
@section('myCode')
    $(document).ready(function(){
        $('#example1').Chocolat();
    });
@stop