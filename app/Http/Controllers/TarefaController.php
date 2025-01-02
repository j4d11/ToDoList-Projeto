<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Models\ToDoList;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index(){
        $tarefas = Tarefa::all();

        return view('tarefas.index', compact('tarefas'));
    }

    public function create(){
        // $tarefas = Tarefa::all();
        $tarefas =  null;
        return view('tarefas.form', compact( 'tarefas'));
    }

    public function store(Request $request){

      $validated = $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            // 'prioridade' => 'required',
        ]);

        Tarefa::create($validated);
        return redirect()->route('tarefas.index');
    }

    public function edit($id){

        $tarefas = Tarefa::findOrFail($id);
        return view('tarefas.form', compact('tarefas'));
    }

    public function update(Request $request, $id){

        $tarefas = Tarefa::findOrFail($id);
        $tarefas->update($request->all());

        return redirect()->route('tarefas.index');
    }

    public function destroy($id){
        $tarefas = Tarefa::findOrFail($id);
        $tarefas->delete();
        return redirect()->route('tarefas.index');
    }
}
