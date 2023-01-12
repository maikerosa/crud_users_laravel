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
                @if (isset($message))
                <div class="alert {{$class_alert}}" role="alert">
                    {{ $message }}
                </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/novo-usuario" method="POST">
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
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="Website">
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Empresa</label>
                            <input type="text" class="form-control" id="company" name="company" placeholder="Empresa">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="eddress_street" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="eddress_street" name="eddress_street" placeholder="Endereço">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">
                        </div>
                        <div class="mb-3 col-sm-6 col-md-6">
                            <label for="eddress_suite" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="eddress_suite" name="eddress_suite" placeholder="Complemento">
                        </div>
                        <div class="mb-3 col-sm-6 col-md-6">
                            <label for="zipcode" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="CEP">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="lat" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="lng" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="lng" name="lng" placeholder="Longitude">
                            <div id="mapid"></div>
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