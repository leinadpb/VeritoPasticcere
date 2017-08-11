@extends('layouts.master-normal-others')

@section('content')
    <div class="container">

        <div class="row"> <!-- Row 1 -->


            <div class="col-md-3"><!-- Section 1 -->
                <img width="100%" class="img-responsive img-circle" src="{{URL::to('images/contact.jpg')}}">
            </div>
            <div class="col-md-9"><!-- Section 2 -->
                Breve description ...
            </div>
            <div class="col-md-2"></div>

        </div>


    </div>
@stop