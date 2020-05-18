@extends('layouts.master')

@section('content')
    <style>
        hr { display: block; height: 1px;
            border: 0; border-top: 1px solid black;
            margin: 1em 0; padding: 0; }
    </style>
    @include('partials.errors')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
<div class="text-center post-title">
    <h1 class="post-title">To Do List</h1>
</div>

    <br>
    @foreach($tasks as $task)


    <h5 class="mb-1">{{$task['task_name']}}</h5>
    <hr class="color-black">

    @endforeach
    <div style="display: flex; justify-content: flex-end">
        <a href="{{route('task.create')}}" class="btn btn-dark">Crear Tarea</a>
    </div>
@endsection
