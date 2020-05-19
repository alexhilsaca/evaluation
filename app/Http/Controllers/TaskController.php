<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Status;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class TaskController extends Controller
{
    public function getIndex()
    {
        $tasks = Task::all();
        return view('task.index', ['tasks' => $tasks]);
    }

    public function getCreateTask()
    {
        $statuses = Status::all()->pluck("status_description", "id");
        return view('task.create', compact('statuses'));
    }

    public function createTask(Store $session, Request $request)
    {
        $status = Status::find($request->input('status'));
        $task = new Task([
            'task_name' => $request->input('name'),
            'task_description' => $request->input('description'),
        ]);
        $task->status()->associate($status)->save();
        $task->save();
        return redirect()
            ->route('task.index')
            ->with('info', 'Creada tarea nueva: ' . $request->input('name'));
    }

    public function getEditTask($id)
    {
        $task = Task::find($id);
        $statuses = Status::all()->pluck("status_description", "id");
        return view('task.edit', compact('task', 'statuses'));
    }

    public function editTask(Request $request)
    {
        $task = Task::find($request->input('id'));
        $status = Status::find($request->input('status'));
        $task->task_name = $request->input('name');
        $task->task_description = $request->input('description');
        $task->status()->associate($status)->save();
        $task->save();

        return redirect()
            ->route('task.index')
            ->with('info', 'Editada tarea: ' . $request->input('name'));
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect()
            ->route('task.index')
            ->with('info', 'Tarea eliminada ');
    }
}
