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
            @if (Auth::guest())

            @else
                <li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/register">Agregar administrador</a>
                            <a class="dropdown-item" href="{{route('add-product')}}">Agregar producto</a>
                            <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">Cerrar sesión</a>
                        </div>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>


            @endif
        </ul>
    </div>
</nav><br>