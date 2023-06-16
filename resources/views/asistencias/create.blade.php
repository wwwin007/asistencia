@extends('layouts.app')

@section('contenido')

 <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"> registrar<small>asistencia</small></h1>
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

        @if (count($errors) > 0)
    <div class="alert alert-danger">
    	<p>Corrige los siguientes errores:</p>
        <ul>
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('asistencia.store')}}" method="POST" autocomplete="off">
        @csrf

        <div class="col-md-6">
            <div class="form-group">
                <label>SELECCIONAR ESTUDIANTE</label>
                <select class="form-control select2bs4" style="width: 100%;" name="estudiante_ci">
                    @foreach ($estudiantes as $estu )
                        <option value="{{$estu->ci}}">{{$estu->ci}} - {{$estu->nombre}} </option>
                    @endforeach
                  
                </select>
              </div>
            <!-- /.form-group -->
            
            <!-- /.form-group -->
          </div>
          <div class="col-md-6">
          <div class="input-group">
            
            <input type="text" aria-label="First name" class="form-control" placeholder="x1" name="x1" maxlength="3" onkeyup="this.value = this.value.toUpperCase();">
            <span class="input-group-text">-</span>
            <input type="text" aria-label="Last name" class="form-control" placeholder="x2" name="x2" maxlength="3"onkeyup="this.value = this.value.toUpperCase();">
            <span class="input-group-text">-</span>
            <input type="text" aria-label="Last name" class="form-control" placeholder="x3" name="x3" maxlength="3"onkeyup="this.value = this.value.toUpperCase();">
          </div>
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Registrar</button>
         </div>

    </form>  

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection