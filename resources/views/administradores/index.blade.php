@extends('layouts.app')

@section('content')
    @include('partials._navbar')
    <div class="container-fluid pt-4 px-4">
        <h1>Listagem de Administradores</h1>
        <hr>
        <a href="{{ route('administradores.create') }}" class="btn btn-primary">Novo</a>
        <hr>
        <table class="table table-striped table-bordered">
        <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($administradores as $administrador)
                    <tr>
                        <td>{{ $administrador->nome }}</td>
                        <td>{{ $administrador->telefone }}</td>
                        <td>{{ $administrador->email }}</td>
                        <td>
                            <a href="{{ route('administradores.edit', $administrador->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('administradores.destroy', $administrador->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('partials._footer')
@endsection
