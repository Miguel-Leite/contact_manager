<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} - Painel Administrativo </title>

    {{-- main style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- bootstrap.min.css --}}
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    {{-- datatables --}}
    <link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">

    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}

    {{-- alert izitoast --}}
    <link rel="stylesheet" href="{{ asset('vendor/izitoast/css/iziToast.min.css') }}" />

    {{-- sweet alert --}}
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
</head>

<body>
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">AlfaSofware</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('pages.index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.add') }}">Novo contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Editar</a>
                                <a class="dropdown-item" href="#">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <p> Copyright &copy; Todos os directos reservados - Sistema de Pagamento Escolar </p>
        </div>
    </footer>

    {{-- jquery.min.js --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    {{-- bootstrap.min.js --}}
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    {{-- datatables --}}
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    {{-- alert izitoast --}}
    <script src="{{ asset('vendor/izitoast/js/iziToast.min.js') }}"></script>

    {{-- axios --}}
    <script src="{{ asset('vendor/axios/axios.min.js') }}"></script>

    <script src="{{ asset('js/admin/main.js') }}"></script>
    @yield('script-bottom')
</body>

</html>
