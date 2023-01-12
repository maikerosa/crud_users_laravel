@extends('layouts.app')
@section('title') Tasks @endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2>Tarefas</h2>
            </div>
            <div class="col-12">
                <div class="d-flex gap-5">
                    <a href="/" class="btn btn-dark">Voltar</a>
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
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Título</th>
                            <th scope="col">ID do autor</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if (isset($tarefas))
                            @for ($i = 0; $i < count($tarefas); $i++)
                                <tr>
                                    <th scope="row">{{ $tarefas[$i]->id}}</th>
                                    <td>{{ $tarefas[$i]->title }}</td>
                                    <td>
                                        <a href="/users/{{ $tarefas[$i]->userid }}">{{ $tarefas[$i]->userid }}</a>

                                    </td>
                                    <td> 
                                        @if ($tarefas[$i]->completed == true)
                                            <span class="badge badge-success text-bg-success ">Concluído</span>
                                        @else
                                            <span class="badge badge-danger text-bg-danger">Não concluído</span>
                                        @endif
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