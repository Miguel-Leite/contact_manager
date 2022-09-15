@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form method="post" class="needs-validation form-login"
            action="{{ route('api.login') }}" novalidate>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" class="form-control"
                    type="text" name="email" placeholder="E-mail" required/>
                    <div class="invalid-feedback">
                        Por favor informa o seu e-mail
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" class="form-control"
                    type="password" name="password" placeholder="Senha" required/>
                    <div class="invalid-feedback">
                        Por favor informa a senha
                    </div>
                </div>
                <button type="submit" class="btn btn-purple col-12">Entrar</button>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script-bottom')
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

@endsection
