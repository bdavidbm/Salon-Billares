<nav class="navbar navbar-expand-md navbar-dark bg-dark border-3 border-botton border-primary">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">Salon Billar</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="Menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-3">
                <li class="nav-item"><a class="nav-link" href="{{url('/clientes')}}">Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/usuarios')}}">Usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/stock')}}">Stock</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('ventas')}}">Ventas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('mesas')}}">Mesas</a></li>
                <!--
                <li class="nav-item-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        stock
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/">home</a></li>
                    </ul>
                </li>
                -->
            </ul>
            <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
        </div>
    </div>
</nav>