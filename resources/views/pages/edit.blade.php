@extends('layouts.app')
@section('data')
    <h4 class="title">Editar contacto</h4>
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="{{ route('api.update', $contact->id) }}" class="needs-validation form-edit" novalidate>
                <div class="page-indicator"></div>
                @csrf
                <div class="form-group">
                    <label for="name">Nome </label><span class="text-danger">*</span>
                    <input type="text" name="name" value="{{ $contact->name }}" id="name"
                        class="form-control form-input-text" placeholder="Nome do contacto" required>
                    <div class="invalid-feedback">
                        Por favor preencha este campo é obrigatório
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact">Contacto </label><span class="text-danger">*</span>
                    <input type="text" name="contact" id="contact" value="{{ $contact->contact }}"
                        class="form-control form-input-text" placeholder="Contacto" required>
                    <div class="invalid-feedback">
                        Por favor preencha este campo é obrigatório
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact">E-mail </label><span class="text-danger">*</span>
                    <input type="email" name="email" id="email" value="{{ $contact->email }}"
                        class="form-control form-input-text" placeholder="Endereço e-mail" required>
                    <div class="invalid-feedback">
                        Por favor preencha este campo é obrigatório
                    </div>
                </div>

                <button type="submit" class="btn btn-purple btn-exec btn-edit col-12"> <i class="fas fa-edit    "></i>
                    Actualizar</button>
                <button type="button" data-endpoint-delete="{{ route('api.delete', $contact->id) }}"
                    class="btn btn-danger btn-edit btn-delete col-12"> <i class="fa fa-trash" aria-hidden="true"></i>
                    Apagar</button>
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

    <script>
        form = document.querySelector('.form-edit')
        console.log(form)
        form.addEventListener('submit', async (e) => {
            e.preventDefault()
            const fd = new FormData(e.currentTarget);
            const {
                data,
                status
            } = await axios.put(form.action, fd);
            if (data.success) {
                iziToast.success({
                    title: 'Sucesso: ',
                    message: data.message,
                    position: 'topCenter'
                });
            } else {
                if (typeof data.message !== 'string') {
                    if (data.message.name) {
                        for (let index = 0; index < data.message.name.length; index++) {
                            iziToast.error({
                                title: 'Falha ao registrar: ',
                                message: data.message.name[index],
                                position: 'topCenter'
                            });
                        }
                    }

                    if (data.message.email) {
                        for (let index = 0; index < data.message.email.length; index++) {
                            iziToast.error({
                                title: 'Falha ao registrar: ',
                                message: data.message.email[index],
                                position: 'topCenter'
                            });
                        }
                    }

                    if (data.message.contact) {
                        for (let index = 0; index < data.message.contact.length; index++) {
                            iziToast.error({
                                title: 'Falha ao registrar: ',
                                message: data.message.contact[index],
                                position: 'topCenter'
                            });
                        }
                    }
                } else {
                    iziToast.error({
                        title: 'Falha ao registrar: ',
                        message: data.message,
                        position: 'topCenter'
                    });
                }
            }

        })

        if (document.querySelector('.btn-delete')) {
            const btn = document.querySelector('.btn-delete')
            btn.addEventListener('click', () => {
                let endpoint = btn.getAttribute('data-endpoint-delete')
                Swal.fire({
                    title: 'Confirma a operação',
                    text: 'Tens certeza que deseja apagar este contacto?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sim',
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        const handle = async () => {
                            const {
                                data
                            } = await axios.delete(endpoint)
                            if (data.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Feito!',
                                    showConfirmButton: false,
                                    timer: 1500
                                })
                                setInterval(() => {
                                    location.assign('/')
                                }, 1500);
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: data.message,
                                    showConfirmButton: false,
                                    timer: 2000
                                })
                            }
                        }
                        handle()
                    }
                })
            });
        }
    </script>
@endsection
