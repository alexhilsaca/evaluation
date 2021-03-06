@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <h1 class="bd-title" id="content">Crear Tarea</h1>
            <hr>
            <br>
            <form action="{{ route('task.create') }}" method="post">
                @include('partials.errors')
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                           placeholder="Nombre">
                    <br>
                    <label for="name">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description"
                           aria-describedby="emailHelp"
                           placeholder="Descripción">
                    <br>
                    <label for="status">Seleccione Estatus:</label>
                    <select id="status" name="status" class="form-control" style="width:100%">
                        <option value="">--- Seleccione Estatus ---</option>
                        @foreach ($statuses as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                {{csrf_field()}}
                <div style="display: flex; justify-content: flex-end">
                    <button type="submit" class="btn btn-primary">Crear Tarea</button>
                </div>

            </form>
        </div>
        <div class="col-3"></div>
    </div>
@endsection
