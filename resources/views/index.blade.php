@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @include('alerts')
    <h1>Treinamentos USPdev - Inscrições abertas</h1>
@stop

@section('content')

    @auth
        <h3>Olá, <b>{{ Auth::user()->name }}</b>, escolha um curso abaixo e se inscreva.</h3>
    @else
        <div><b>Faça o <a href="/login">Login</a> com a senha única para fazer inscrição nos cursos!</b></div>
    @endauth

    @foreach ($turmas as $turma)
    <div class="panel-group">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h2>{{ $turma->curso->titulo}}</h2> 
        ({{ Carbon\Carbon::parse($turma->inicio)->format('d/m/Y') }} -
        {{ Carbon\Carbon::parse($turma->fim)->format('d/m/Y') }}) <br>
        <a href="/cursos/{{ $turma->curso->id }}/turmas/{{ $turma->id }}/subscription" class="btn btn-success"> Fazer minha inscrição </a></div>
    <div class="panel-body">

      @auth
      <h4> Inscritos </h4>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Unidade</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($turma->subscriptions as $subscription)          
              <tr>
                <td>{{ $subscription->user->name }}</td>
                <td>{{ $subscription->user->unidade }}</td>
              </tr>
          @endforeach

        </tbody>
      </table>
      @endauth
    </div>
        
    @endforeach

@stop



