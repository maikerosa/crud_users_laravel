@extends('layouts.app')
@section('title')
    Vendo o usuário {{ $user->name }}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Você esta vendo o usuário: {{ $user->name }}</h2>
            </div>
            <div class="col-12">
                <div class="d-flex my-4 ">
                    <a href="/users" class="btn btn-dark">Voltar a todos os usuários</a>
                </div>
            </div>

            @if (\Session::has('error'))
            <div class="alert alert-danger ms-2" id="alert">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
            @endif

            @if (\Session::has('success'))
            <div class="alert alert-success ms-2" id="alert">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif
          

        </div>



        <div class="row">
            <div class="col-6">
                <div class="d-flex  flex-column gap-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Informações do usuário</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <p><strong>Nome:</strong> {{ $user->name }}</p>
                                </div>
                                <div class="col-12">
                                    <p><strong>Username:</strong> {{ $user->username }}</p>
                                </div>
                                <div class="col-12">
                                    <p><strong>Email:</strong> {{ $user->email }}</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column gap-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Editar usuário</h3>
                        </div>
                        <div class="card-body">
                            <form action="/users/{{ $user->id }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                </div>
                   
                                <button type="submit" class="btn btn-primary">Editar usuário</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        


    @endsection
