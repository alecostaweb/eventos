@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
    <h1>Treinamentos USPdev - Inscrições abertas</h1>
@stop

@section('content')
    @auth
    @else
        <div><b>Faça o <a href="/login">Login</a> com a senha única para fazer inscrição nos cursos!</b></div>
    @endauth


    @foreach ($turmas as $turma)
        <h1>{{ $turma->curso->titulo}}</h1>
         <p> Início: {{ Carbon\Carbon::parse($turma->inicio)->format('d/m/Y') }} </p>
         <p> Fim: {{ Carbon\Carbon::parse($turma->fim)->format('d/m/Y') }} </p>
    @endforeach

@stop



