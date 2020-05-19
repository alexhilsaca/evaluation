@extends('layouts.master')

@section('content')
    <style>
        hr {
            display: block;
            height: 1px;
            border: 0;
            border-top: 1px solid black;
            margin: 1em 0;
            padding: 0;
        }
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
        <div class="row">
            <div class="col-3">
                <div style="display: flex; justify-content: flex-end">
                    @if($task['status_id']==1)
                        <svg class="bi bi-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    @else
                        <svg class="bi bi-check-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z"
                                  clip-rule="evenodd"/>
                            <path fill-rule="evenodd"
                                  d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z"
                                  clip-rule="evenodd"/>
                        </svg>
                    @endif
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <h5 class="mb-1"><a href="{{route('task.edit',['id'=>$task['id']])}}"
                                            style="color:black">{{$task['task_name']  }} </a>
                        </h5>
                    </div>
                    <div class="col-6">
                        <div style="display: flex; justify-content: flex-end">
                            <a href="{{route('task.delete',['id'=>$task['id']])}}" style="color:black">
                                <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                                          clip-rule="evenodd"/>
                                    <path fill-rule="evenodd"
                                          d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="color-black">
            </div>
            <div class="col-3"></div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div style="display: flex; justify-content: flex-end">
                <a href="{{route('task.create')}}" class="btn btn-secondary">Crear Tarea</a>
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>


@endsection
