@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Cursos</h1>
@stop


@section('content')

<form method="POST" action="/cursos">
    {{ csrf_field() }}

    <div class="form-group">
        <label> Nome </label> 
        <input name="titulo" class="form-control">
    </div>    

    <button type="submit" class="btn btn-success"> Enviar </button>
</form>


@stop
