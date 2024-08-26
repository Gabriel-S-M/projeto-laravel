<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks=Task::all();
        
        foreach ($tasks as $task){
            $task->taskId=($task->taskId);
            $task->taskName=($task->taskName);
        }

        return view('task',compact('tasks'));
    }
}
