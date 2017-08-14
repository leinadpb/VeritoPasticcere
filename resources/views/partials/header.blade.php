<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1d2124;">
    <a class="navbar-brand" href="{{route('home')}}">Verito Pasticcere</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('all-products')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('clients')}}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="{{route('about-us')}}">Sobre nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contacto</a>
            </li>
        </ul>
    </div>
</nav><br>