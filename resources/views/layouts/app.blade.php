@extends('layouts.layout')
@section('content')
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('pages.index') }}">AlfaSofware</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('pages.index') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        @if (auth()->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.add') }}">Novo contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.logout') }}">Sair</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pages.login') }}">Entrar</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="content">
                <div class="container">
                    @yield('data')
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <p> Copyright &copy; Todos os directos reservados - Sistema de Pagamento Escolar </p>
        </div>
    </footer>
@endsection
