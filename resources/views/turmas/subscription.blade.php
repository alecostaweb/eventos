@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    <form method="POST" action="/cursos/{{ $curso_id }}/turmas/{{ $turma->id }}/subscription">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Conte-nos um pouco sobre seu background, linguagens de programação que usa, sistemas que já desenvolveu etc:</label>
            <textarea class="form-control" rows="5" name="motivacao"></textarea>
        </div>

        <label>Deseja mesmo fazer o curso <i>{{ $turma->curso->titulo}}? </i></label>
        <br>
        <button type="submit" class="btn btn-success"> Sim! </button>
    </form>

@stop


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="/js/app.js"></script>
@stop
