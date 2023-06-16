@extends('layouts.app')

@section('contenido')


<div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> <small>Lista de</small> ESTUDIANTES ASISTIDOS</h1>
        </div><!-- /.col -->
      
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
 <!-- /.card -->

 <div class="card">
    <div class="card-header">
      <h3 class="card-title">INF 530</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>CI</th>
          <th>Estudiante</th>
          <th>Codigo</th>
         
        </tr>
        </thead>
        <tbody>
            @foreach ( $asistencias as $asis )
   
         
        <tr>
          <td>{{$asis->id}}</td>
          <td>{{$asis->estudiante->ci}}</td>
          <td>{{$asis->estudiante->nombre}}, {{$asis->estudiante->apellidos}} </td>
          <td>{{$asis->codigo->codigo}}</td>
         
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
          <th>id asistencia</th>
          <th>ci-Estudiante</th>
          <th>nombre completo</th>
          <th>codigo asistencia</th>
          
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

@endsection