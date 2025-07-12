@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Funcionarios</h1>

        <button data-bs-toggle="modal" data-bs-target="#create" class="btn btn-success btn-sm mb-3"><i class="bi bi-plus-lg"></i> Novo funcionário</button>

        <table id="tabela" class="table table-custom">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                    <th>Admissão</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($funcionarios as $funcionario)
                    <tr>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->email }}</td>
                        <td>{{ $funcionario->cpf }}</td>
                        <td>{{ $funcionario->cargo }}</td>
                        <td>{{ $funcionario->dataAdmissao->format('d/m/Y') }}</td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#show-{{ $funcionario->id }}" class="btn btn-info btn-sm"><i class="bi bi-search"></i></button>
                            <button data-bs-toggle="modal" data-bs-target="#edit-{{ $funcionario->id }}" class="btn btn-info btn-sm"><i class="bi bi-pencil-square"></i></button>
                            <button data-bs-toggle="modal" data-bs-target="#delete-{{ $funcionario->id }}" class="btn btn-info btn-sm"><i class="bi bi-trash-fill"></i></button>
                        </td>
                    </tr>

                    <x-modal-show :funcionario="$funcionario" />
                    <x-modal-edit :funcionario="$funcionario" />
                    <x-modal-delete :funcionario="$funcionario" />

                @endforeach
            </tbody>
        </table>
    </div>

    <x-modal-create />

@endsection