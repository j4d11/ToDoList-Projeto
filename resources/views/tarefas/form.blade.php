@extends('layouts.jade')
@section('content')
    <h1>{{ $tarefas ? 'Editar' : 'Cadastrar' }}</h1>

    <form action="{{ $tarefas ? route('tarefas.update', $tarefas->id) : route('tarefas.store') }}" method="POST">
        @csrf
        @if ($tarefas)
            @method('PUT')
        @endif
        
        <label for="titulo" >Tarefa</label>
        <div ><input class="form-control" type="text" name="titulo" placeholder="Nome da Tarefa" value="{{ $tarefas->titulo ?? old('titulo') }}"></div>
        <label for="descricao" class=" mt-2">Descrição</label>
        <div ><input class="form-control" type="text" name="descricao" placeholder="Descrição"
                value="{{ $tarefas->descricao ?? old('descricao') }}"></div>
        {{-- <div><label for="prioridade">Prioridade</label></div> --}}

        @include('components.todolist')

        <div class="mt-2">
            <button type="submit" class="btn btn-primary btn-sm">{{ $tarefas ? 'Editar' : 'Cadastrar' }}</button>
            <a href="{{ route('tarefas.index') }}" class="btn btn-secondary btn-sm">Voltar</a>
        </div>


    </form>

    <script src="{{ asset('js/todolist.js') }}"></script>

@endsection
