<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Glegoo|Satisfy" rel="stylesheet">   <!-- single product title and description -->

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="{{URL::to('css/normal-style.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('css/font-awesome.min.css')}}">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
</body>
</html>
