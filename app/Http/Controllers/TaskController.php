<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class TaskController extends Controller
{
    public function getIndex()
    {
        $tasks= Task::all();
        return view('task.index', ['tasks'=>$tasks]);
    }


    public function getCreateTask()
    {
        return view('task.create');
    }

    public function createTask(Store $session, Request $request){
        $task=new Task([
            'task_name'=>$request->input('name')
        ]);
        $task->save();
        return redirect()->route('task.index')->with('info', 'Creada tarea nueva: ' . $request->input('name'));
    }
}
