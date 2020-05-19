@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <h1 class="bd-title" id="content">Editar Tarea</h1>
            <hr>
            <br>
            <form action="{{route('task.update')}}" method="post">
                @include('partials.errors')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                           placeholder="Nombre" value="{{$task['task_name']}}">
                    <br>
                    <label for="name">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description"
                           aria-describedby="emailHelp"
                           placeholder="Descripción" value="{{$task['task_description']}}">
                    <br>
                    <label for="status">Seleccione Estatus:</label>
                    <select id="status" name="status" class="form-control" style="width:100%">
                        <option value="">--- Seleccione Estatus ---</option>
                        @foreach ($statuses as $key => $value)
                            @if($task['status_id']==$key)
                                <option value="{{ $key }}" selected='selected'>{{ $value }}</option>
                            @else
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$task['id']}}">
                <div style="display: flex; justify-content: flex-end">
                    <button type="submit" class="btn btn-info">Editar</button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
@endsection
