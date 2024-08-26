<h1>Lista de Tarefas</h1>
@foreach ($tasks as $task)
<div>
    <ul>
        <li>{{ $task->taskId}} {{ $task->taskName}}</li>
    </ul>
</div>
@endforeach