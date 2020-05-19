@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <h1 class="bd-title" id="content">Editar Estatus</h1>
            <hr>
            <br>
            <form action="{{route('status.update')}}" method="post">
                @include('partials.errors')
                <div class="form-group">

                    <label for="name">Descripción</label>
                    <input type="text" class="form-control" id="description" name="description"
                           aria-describedby="emailHelp"
                           placeholder="Descripción" value="{{$status['status_description']}}">
                </div>
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$status['id']}}">
                <div style="display: flex; justify-content: flex-end">
                    <button type="submit" class="btn btn-info">Editar Estatus</button>
                </div>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
@endsection
