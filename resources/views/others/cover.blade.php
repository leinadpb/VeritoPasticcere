<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Verito Pasticcere</title>

    <!-- Bootstrap core CSS -->
    <link href="{{URL::to('css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{URL::to('css/cover.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead">
                <div class="inner">
                    <nav class="nav nav-masthead">
                        <a class="nav-link" href="{{route('all-products')}}">Inicio</a>
                        <a class="nav-link" href="{{route('clients')}}">Clientes</a>
                        <a class="nav-link" href="{{route('about-us')}}">Sobre nosotros</a>
                        <a class="nav-link" href="{{route('contact')}}">Contacto</a>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <span style="font-family: 'Dancing Script', cursive; font-size:4.3em;"><b>Verito Pasticcere</b></span>
                <p class="lead">¡Deliciosos pasteles y dulces de mesas!</p>
                <p class="lead">
                    <a href="{{route('all-products')}}" class="btn btn-lg btn-secondary">Quiero verlos</a>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Gracias a <a href="#">SIECpb</a></p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
