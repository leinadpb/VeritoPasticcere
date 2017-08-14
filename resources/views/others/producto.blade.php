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