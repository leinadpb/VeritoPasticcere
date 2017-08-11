@extends('layouts.master-normal-others')

@section('content')

    <!-- Receiving vars:
           $product,
     -->

    <div class="container-fluid">

        <!-- Menu -->
        <div class="Menu">

        </div>

        <!-- Other Sections -->
        <div class="row">

            <div class="col-md-2"></div>

            <!-- Slider or single image-->
            <div class="col-md-4">
                @include('others.slider')
            </div>

            <!-- Product Details -->
            <div class="col-md-4">
                @include('others.details')
            </div>

            <div class="col-md-2"></div>

        </div>
    </div>


@endsection