<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">



    <title>Verito Pasticcere</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Glegoo|Satisfy" rel="stylesheet">   <!-- single product title and description -->

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{URL::to('css/normal-style.css')}}">
    @yield('add-css')



    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{URL::to('css/bootstrap.css')}}" type="text/css">
    <!-- JavaScript and Jquery -->
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="{{URL::to('js/bootstrap.js')}}"></script>
<!-- End -->

    <!-- Chocolat, for showing images -->
    <script type="text/javascript" src="{{URL::to('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/jquery.chocolat.js')}}"></script>
    <link rel="stylesheet" href="{{URL::to('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">


</head>
<body>
    @include('partials.header')
    <div class="container-fluid">
        @yield('content')
    </div>
    <script type="text/javascript">
        @yield('myCode')
    </script>
    @include('partials.footer')

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-598e285f176f6444"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
