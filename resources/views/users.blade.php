@extends('layouts.app')
@section('title') Usuários @endsection 

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Usuários</h2>
            </div>
            <div class="col-12">
                <div class="d-flex gap-5">
                    <a href="/" class="btn btn-dark">Voltar</a>
                    <a href="/users/new" class="btn btn-primary">Novo usuário</a>
                </div>
            </div>
            <div class="col-12 py-3">
                @if (isset($status))
                <div class="alert {{$status['class_alert']}}" role="alert">
                    {{ $status['message'] }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($users))
                            @for ($i = 0; $i < count($users); $i++)
                                <tr>
                                    <td>{{ $users[$i]->id }}</td>
                                    <td>{{ $users[$i]->name }}</td>
                                    <td>{{ $users[$i]->email }}</td>
                                    <td>
                                        <a href="/users/{{ $users[$i]->id }}" class="btn btn-primary">Detalhes</a>
                                        <form action="/users/{{ $users[$i]->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Deletar</button>
                                        </form>
                                    </td>

                                 
                                </tr>
                            @endfor
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection