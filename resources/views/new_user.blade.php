@extends('layouts.app')
@section('title') Novo usuário @endsection
@section('content')



    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <h2>Criar novo usuário</h2>
            </div>
            <div class="col-12">
                <div class="d-flex gap-5 py-3">
                    <a href="/users" class="btn btn-primary">Voltar</a>
                </div>
            </div>
            <div class="col-12 py-4">
                @if (isset($status))
                <div class="alert {{$status['class_alert']}}" role="alert">
                    {{ $status['message'] }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{route('users_edit')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="row"> 
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="username" class="form-label">Usuário</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Usuário">
                        </div>
                        <div class="mb-3 col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                     
                    </div>
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
        </div>
    </div>

    <script>

        const alert = document.querySelector('.alert');
        if(alert.classList.contains('alert-success')){
            setTimeout(() => {
                window.location.href = '/users';
            }, 3000);
        }

    </script>
@endsection