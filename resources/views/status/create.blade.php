@extends('layouts.master')

@section('content')


    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <h1 class="bd-title" id="content">Crear Estatus</h1>
            <hr>
            <br>
            <form action="{{ route('status.create') }}" method="post">
                @include('partials.errors')
                <div class="form-group">
                    <label for="name">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description"
                           aria-describedby="emailHelp"
                           placeholder="Descripción">
                </div>
                {{csrf_field()}}
                <div style="display: flex; justify-content: flex-end">
                    <button type="submit" class="btn btn-primary">Crear Estatus</button>
                </div>

            </form>
        </div>
        <div class="col-3"></div>
    </div>
@endsection
