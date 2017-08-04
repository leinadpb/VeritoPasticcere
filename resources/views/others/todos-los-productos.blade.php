@extends('layouts.master-normal-others')

@section('content')

    <!-- Header -->
    <div class="page-header">
        <h2>Todos los productos</h2>
    </div>
    <br>
    <div class="row">

        <div class="col-md-3">
            <div align="center"><b><i>Filtros avanzados</i></b></div>
            <div>
                <form>

                </form>
            </div>
        </div>

        <div class="col-md-7">

            <!-- Elementos -->
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ URL::to('images/proximamente.png')  }}" alt="..." width="150" height="80">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Media description here....
                </div>
            </div><hr>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ URL::to('images/proximamente.png')  }}" alt="..." width="150" height="80">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Media description here....
                </div>
            </div><hr>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ URL::to('images/proximamente.png')  }}" alt="..." width="150" height="80">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Media description here....
                </div>
            </div><hr>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="{{ URL::to('images/proximamente.png')  }}" alt="..." width="150" height="80">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Media description here....
                </div>
            </div><hr>
            <!-- -->

        </div>

    </div>


@endsection