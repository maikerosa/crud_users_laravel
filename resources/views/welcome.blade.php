@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="d-flex flex-column gap-3">
            <div class="col-12 mt-5 text-center">
                <h1>JsonPlaceHolder</h1>
            </div>
            <div class="col-12">
                <div class="fs-4">
                    O que deseja fazer?
                </div>
                <div class="d-flex gap-3 mt-3 justify-content-center align-items-center">
            
                    <a href="/users" class="text-decoration-none ">
                        <div class="card btn btn-outline-dark">
                            <div class="card-body">
                                <i class="ph-user-circle fs-3"></i>
                                <h5 class="card-title">Usuários</h5>
                                <p class="card-text">Aqui você pode ver todos os usuários</p>
                            </div>
                        </div>
                    </a>
                    <a href="/tasks" class="text-decoration-none ">
                        <div class="card btn btn-outline-dark">
                            <div class="card-body">
                                <i class="ph-check-circle fs-3" ></i>
                                <h5 class="card-title">Tarefas</h5>
                                <p class="card-text">Aqui você pode ver as tarefas dos usuários</p>
                            </div>
                        </div>
                    </a>
                    
                    
                </div>

            </div>
        </div>
    </div>
@endsection

