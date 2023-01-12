@extends('layouts.app')
@section('title') Nova Tarefa @endsection
@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <h2>Criar nova tarefa</h2>
            </div>
            <div class="col-12">
                <div class="d-flex gap-5 py-3">
                    <a href="/tasks" class="btn btn-primary">Voltar</a>
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
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título da tarefa" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrição da tarefa" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="A fazer">A fazer</option>
                            <option value="Fazendo">Fazendo</option>
                            <option value="Feito">Feito</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">Id do usuário de 0 a 10</label>
                        <input class="form-control" id="user_id" name="user_id" rows="3" placeholder="id do usuário para esta tarefa" required>
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
                window.location.href = '/tasks';
            }, 3000);
        }

    </script>
@endsection