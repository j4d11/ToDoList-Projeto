<label for="todolist" class="mt-2">Lista de Tarefas</label>

<div>
    <div class="input-group mb-3">
        <input type="text" id="todoList" name="todoLists[]" class="form-control" placeholder="Adicionar Sub-Tarefas"
            aria-label="Adicionar Tarefas" aria-describedby="button-addon2">
        <button class="btn btn-outline-success" type="button" id="adicionarTodolist" onclick="addTodoList()">+</button>
    </div>
    <ul id="todolistFloat">
        @foreach ($todoLists as $todoList)
            <li {{ $todoList->tarefa_id }}>
                <span>{{ $todoList->descricao }}</span>
            </li>
        @endforeach
    </ul>
    <input type="text" id="todolistArray" name="todolistArray" hidden>
</div>

<script>
    function addTodoList() {
        const todoList = document.getElementById('todoList').value;

        const parent = document.getElementById('todolistFloat');

        const newElement = document.createElement('li');
        newElement.textContent = todoList;

        parent.append(newElement);

    }
</script>
