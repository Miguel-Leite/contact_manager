<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} </title>

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

    @yield('content')


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

    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script-bottom')
</body>

</html>
