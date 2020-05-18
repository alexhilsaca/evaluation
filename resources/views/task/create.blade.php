
@extends('layouts.master')

@section('content')
@include('partials.errors')
<form  action="{{ route('task.create') }}" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Nombre">
    </div>
    {{csrf_field()}}
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
