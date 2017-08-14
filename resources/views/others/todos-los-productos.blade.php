@extends('layouts.master-normal-others')

@section('content')

    <!-- Buscador -->

    <div class="row justify-content-md-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @if(!($msg) == "")
            <div class="row">
                <div class="col-md-1">
                    <a href="{{route('all-products')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-11">
                    <form action="{{route('search')}}" method="post">
                        <div class="input-group">
                            <input name="search-text" type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit">Go!</button>
                            </span>
                       </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
            @else
            <form action="{{route('search')}}" method="post">
                <div class="input-group">
                    <input name="search-text" type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit">Go!</button></span>
                </div>
                {{csrf_field()}}
            </form>
            @endif
        </div><!-- /.col-lg-6 -->
        <div class="col-md-4"></div>
    </div><!-- /.row -->
    <!-- End -->
<br>
        @if(!($msg) == "")
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="tempText alert alert-dismissible" role='alert'>
                        {{ $msg }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
        @endif


    <div class="row">
        <!-- Start -->
        @foreach($products as $p)
        <div class="myCard col-sm-4 col-md-2">
            <a class='box-product card-img-top' href="{{route('single-product', ['id' => $p->id])}}">
                <div class="card">
                    <img class='product-image' src="{{URL::to('images/logo.jpg')}}" alt="{{$p->title}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$p->title}}</h4>
                    </div>
                </div>
            </a>
        </div>
        <!-- End -->
        @endforeach


    </div>

@endsection