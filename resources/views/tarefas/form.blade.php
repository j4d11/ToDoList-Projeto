@extends('layouts.jade')
@section('content')

<h1>{{$tarefas ? 'Editar' : 'Cadastrar'}}</h1>

<form action="{{$tarefas ? route('tarefas.update', $tarefas->id) : route('tarefas.store') }}" method="POST">
    @csrf
    @if($tarefas)
    @method('PUT')
    @endif
    <div><input type="text" name="titulo" placeholder="Título" value="{{$tarefas->titulo ?? old('titulo') }}"></div>
    <div><input type="text" name="descricao" placeholder="Descrição" value="{{$tarefas->descricao ?? old('descricao') }}"></div>
    {{-- <div><label for="prioridade">Prioridade</label></div> --}}

    <button type="submit">{{$tarefas ? 'Editar' : 'Cadastrar'}}</button>
</form>
@endsection
