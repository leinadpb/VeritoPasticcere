@extends('layouts.master-normal-others')

@section('content')

    <!-- Buscador -->

    <div class="row justify-content-md-center">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            @if(!($msg) == "")
            <div class="row">
                <div class="col-md-1">
                    <a href="{{route('all-products')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></a>
                </div>
                <div class="col-md-11">
                    <form action="{{route('search')}}" method="post">
                        <div class="input-group">
                            <input name="search-text" type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                         <button class="btn btn-default" type="submit">Buscar</button>
                    </span>
                        </div><!-- /input-group -->
                        {{csrf_field()}}
                    </form>
                </div>
            </div>
            @else
            <form action="{{route('search')}}" method="post">
                <div class="input-group">
                    <input name="search-text" type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                         <button class="btn btn-default" type="submit">Buscar</button>
                    </span>
                </div><!-- /input-group -->
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
        <div class="col-sm-4 col-md-2">
            <a class='box-product' href="{{route('single-product', ['id' => $p->id])}}">
                <div class="thumbnail">
                    <img class='product-image' src="{{URL::to('images/logo.jpg')}}" alt="Verito">
                    <div class="caption">
                        <h3>{{$p->title}}</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- End -->
        @endforeach


    </div>

@endsection