@extends('layouts.app')
@section('content')
    <h2 class="title">Lista de contactos</h2>
    <br>
    <br>
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Contacto</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->email }}</td>
                <td class="float-right">
                    @if (auth()->check())

                    <span class="actionCust mx-2">
                        <a href="{{ route('pages.update',$contact->id) }}" class="btn-success text-white" title="Editar" data-endpoint="">
                            <i class="fas fa-pen text-white" aria-hidden="true"></i>
                        </a>
                    </span>
                    <span class="actionCust mx-2">
                        <a href="javascript:;"
                        data-endpoint-delete="{{ route('api.delete',$contact->id) }}"
                        class="btn-danger btn-delete" title="Apagar"> <i
                                class="fas fa-trash text-white"></i> </a>
                    </span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
