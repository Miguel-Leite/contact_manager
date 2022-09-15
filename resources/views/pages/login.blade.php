@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="#" method="post" class="form-login">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" class="form-control" type="text" name="email" placeholder="E-mail" />
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="E-mail" />
                </div>
                <button type="submit" class="btn btn-purple col-12">Entrar</button>
            </form>
        </div>
    </div>
</div>

@endsection
