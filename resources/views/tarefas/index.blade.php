@extends('layouts.jade')
@section('content')
<div>
    <h1>Tarefas</h1>
</div>
<div>
    <table class="table table-sm table-hover ">
        <tbody>
          <tr>
              <th>Titulo</th>
              <th>Descricao</th>
              <th>Prioridade</th>
          </tr>
          @forelse($tarefas as $tarefa)
              <tr>
                  <td>{{$tarefa->titulo}}</td>
                  <td>{{$tarefa->descricao}}</td>
                  <td>{{$tarefa->prioridade}}</td>
                  <td>
                      <a href="{{route('tarefas.edit', $tarefa->id)}}" class="btn btn-success">Editar</a>
                  </td>
              </tr>
          @empty
              <tr>
                  <td colspan="3">Nenhuma tarefa cadastrada</td>
              </tr>
          @endforelse
        </tbody>
      </table>

</div>
<div>
    <a href="{{route('tarefas.create')}}" class="btn btn-primary" >Cadastrar</a>
</div>
@endsection
