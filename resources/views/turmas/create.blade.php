@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nova turma</h1>
@stop

@section('content')

    <form method="POST" action="/cursos/{{ $curso_id }}/turmas">
        {{ csrf_field() }}

        Data início: <input name="inicio">

        Data fim: <input name="fim">

        <button type="submit" class="btn btn-success"> Salvar </button>
    </form>

@stop
