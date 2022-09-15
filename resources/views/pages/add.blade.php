@extends('pages.admin.layouts.app')
@section('content')
    <h2 class="title">Adicionar nova instituição</h2>
    <br><br>
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="{{ route('admin.addSchools') }}" method="post" class="needs-validation form-schools" novalidate>
                <div class="page-indicator"></div>
                @csrf
                <div class="step page-active">
                    <h3>Dados da instituição</h3>
                    <div class="form-group">
                        <label for="name">Nome </label><span class="text-danger">*</span>
                        <input type="text" name="name" id="name" class="form-control form-input-text"
                            placeholder="Nome da instituição" required>
                        <div class="invalid-feedback">
                            Por favor preencha este campo é obrigatório
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="abbreviation">Abreviação </label><span class="text-danger">*</span>
                        <input type="text" name="abbreviation" id="abbreviation" class="form-control form-input-text"
                            placeholder="Abreviação" required>
                        <div class="invalid-feedback">
                            Por favor preencha este campo é obrigatório
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="price">Valor por estudante (AKZ) </label><span class="text-danger">*</span>
                        <input type="number" name="price_for_student" value="300" id="price"
                            class="form-control form-input-text" placeholder="Valor por cada estudante" required>
                        <div class="invalid-feedback">
                            Por favor preencha este campo é obrigatório
                        </div>
                    </div>
                    <hr class="bg-dark-4">
                    <label class="custom-control custom-switch">
                        <input type="checkbox" name="status" id="status" value="1" class="custom-control-input"
                            checked>
                        <label class="custom-control-label" for="status">Estado</label>
                    </label>
                </div>
                <div class="step">
                    <h3>Dados do administrador da instituição</h3>
                    <div class="form-group">
                        <label for="username">Nome </label><span class="text-danger">*</span>
                        <input type="text" name="username" id="username" value="Admin"
                            class="form-control form-input-text" placeholder="Nome do administrador" required>
                        <div class="invalid-feedback">
                            Por favor preencha este campo é obrigatório
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail </label><span class="text-danger">*</span>
                        <input type="text" name="email" value="admin@gmail.com" id="email"
                            class="form-control form-input-text input-email" placeholder="E-mail do administrador" required>
                        <div class="invalid-feedback">
                            Por favor preencha este campo é obrigatório
                        </div>
                    </div>
                    <input type="hidden" name="level" value="admin" />
                </div>

                <br />
                <hr class="bg-dark-4">
                <div class="controls-submit">
                    <button type="button" class="btn btn-previous d-none col-5">Voltar</button>
                    <button type="submit" class="btn btn-purple btn-next col-5">Avançar</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
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
