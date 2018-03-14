@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{ $curso->titulo }}</h1>
@stop

@section('content')

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"> Turmas </th>
        </tr>
      </thead>
    <tbody>
      @foreach ($curso->turmas as $turma)
      <tr>
        <td> {{ $turma->inicio }} {{ $turma->fim }} </td>
      </tr>
      @endforeach
    </tbody>
    </table>

    <a href="/cursos/{{ $curso->id }}/turmas/create" class="btn btn-success">Cadastrar nova turma</a>
@stop
