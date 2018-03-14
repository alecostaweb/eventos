@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nova turma</h1>
@stop

@section('content')

    <form method="POST" action="/cursos/{{ $curso_id }}/turmas">
        {{ csrf_field() }}

        <div class="form-group">
            <label> Data início: </label>   
            <input name="inicio" class="datepicker">
        </div>
        <div class="form-group">
            <label> Data Fim: </label>   
            <input name="fim" class="datepicker">
        </div>
       <button type="submit" class="btn btn-success"> Salvar </button>
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
