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
                <th>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-purple float-right" data-toggle="modal" data-target="#modelId">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Adicionar novo usuário
                    </button>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->contact }}</td>
                <td>{{ $contact->email }}</td>
                <td class="float-right">
                    <span class="actionCust mx-2">
                        <a href="javascript:;" class="btn-success text-white" title="Editar" data-endpoint="">
                            <i class="fas fa-pen text-white" aria-hidden="true"></i>
                        </a>
                    </span>
                    <span class="actionCust mx-2">
                        <a href="javascript:;" class="btn-danger btn-delete" title="Apagar" data-endpoint=""> <i
                                class="fas fa-trash text-white"></i> </a>
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
