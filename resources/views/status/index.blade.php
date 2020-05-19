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
        <h1 class="post-title">Estatus</h1>
    </div>

    <br>


    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Descripción</td>
                    <td colspan=2 align="center">Acciones</td>
                </tr>
                </thead>
                <tbody>
                @foreach($statuses as $status)
                    <tr>
                        <td>{{$status['id']  }}</td>
                        <td> {{$status['status_description']  }}</td>
                        <td align="center">
                            <a href="{{route('status.edit',['id'=>$status['id']])}}" class="btn btn-info">Editar</a>
                            <a href="{{route('status.delete',['id'=>$status['id']])}}"
                               class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div style="display: flex; justify-content: flex-end">
                <a href="{{route('status.create')}}" class="btn btn-primary">Crear Estatus</a>
            </div>
        </div>
        <div class="col-3">

        </div>
    </div>
@endsection
