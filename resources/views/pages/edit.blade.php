@extends('layouts.app')
@section('content')
    <h4 class="title">Editar contacto</h4>
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="{{ route('pages.add') }}" method="post" class="needs-validation form-schools" novalidate>
                <div class="page-indicator"></div>
                @csrf
                <div class="form-group">
                    <label for="name">Nome </label><span class="text-danger">*</span>
                    <input type="text" name="name" id="name" class="form-control form-input-text"
                        placeholder="Nome do contacto" required>
                    <div class="invalid-feedback">
                        Por favor preencha este campo é obrigatório
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact">Contacto </label><span class="text-danger">*</span>
                    <input type="text" name="contact" id="contact" class="form-control form-input-text"
                        placeholder="Contacto" required>
                    <div class="invalid-feedback">
                        Por favor preencha este campo é obrigatório
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact">E-mail </label><span class="text-danger">*</span>
                    <input type="text" name="email" id="email" class="form-control form-input-text"
                        placeholder="Endereço e-mail" required>
                    <div class="invalid-feedback">
                        Por favor preencha este campo é obrigatório
                    </div>
                </div>

                <button type="submit" class="btn btn-purple col-12"> <i class="fas fa-edit    "></i> Actualizar</button>
                <button type="button" class="btn btn-danger btn-edit col-12"> <i class="fa fa-trash" aria-hidden="true"></i> Apagar</button>
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
