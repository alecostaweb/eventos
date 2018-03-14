@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cursos</h1>
@stop

@section('content')

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">  </th>
        </tr>
      </thead>
    <tbody>
      @foreach ($cursos as $curso)
      <tr>
        <td><a href="/cursos/{{ $curso->id }}"> {{ $curso->titulo }} </a></td>
      </tr>
      @endforeach
    </tbody>
    </table>

    <a href="/cursos/create" class="btn btn-success">Cadastrar novo curso</a>
@stop
