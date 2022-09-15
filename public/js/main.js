if (document.querySelectorAll('.btn-delete')) {
    const btns = document.querySelectorAll('.btn-delete')
    for (let index = 0; index < btns.length; index++) {
        btns[index].addEventListener('click', () => {
            let endpoint = btns[index].getAttribute('data-endpoint-delete')
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
                    const handle = async() => {
                        const { data } = await axios.delete(endpoint)
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Feito!',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setInterval(() => {
                                location.reload()
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
}

if (document.querySelector('.form-add')) {
    const form = document.querySelector('.form-add')

    form.addEventListener('submit', async(e) => {
        e.preventDefault();
        const fd = new FormData(e.currentTarget)

        const { data, status } = await axios.post(form.action, fd)

        if (data.success && status === 201) {
            form.classList.remove('needs-validation')
            form.classList.remove('was-validated')
            iziToast.success({
                title: 'Sucesso: ',
                message: data.message,
                position: 'topCenter'
            });
            form.reset()
        } else {
            iziToast.error({
                title: 'Falha ao registrar: ',
                message: data.message,
                position: 'topCenter'
            });
        }
    })
}

if (document.querySelector('.form-login')) {
    const formLogin = document.querySelector('.form-login')
    console.log(formLogin)
    formLogin.addEventListener('submit', async(e) => {
        e.preventDefault();
        const fd = new FormData(e.currentTarget);
        const { data, status } = await axios.post(formLogin.action, fd);

        if (data.success) {
            iziToast.success({
                title: 'Sucesso!',
                message: data.message,
                position: 'topRight'
            });
            formLogin.classList.remove('needs-validation')
            formLogin.classList.remove('was-validated')
            formLogin.reset();
            setTimeout(() => {
                location.assign("/")
            }, 3000)
        } else {
            iziToast.error({
                title: 'Falha na autenticação!',
                message: data.message,
                position: 'topRight'
            });
        }
    })
}