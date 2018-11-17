@extends('layouts.app')
@section('css')

@endsection

@section('content')
<div class="box box-default">

	<div class="box-header with-border">
	
		<i class="fa fa-upload"></i>

	  	<h3 class="box-title">Subir Catálogos</h3>

	</div>

	<!-- /.box-header -->

	<div class="box-body">

  	<form action="{{ route('catalogue-store') }}" method="post" enctype="multipart/form-data">

      <div class="form-group">

        <div class="row">
          
          <div class="col-md-6">
            
            <label for="">Nombre</label>
            
            <input type="text" class="form-control" name="name">
          
          </div>
          
          <div class="col-md-6">
            
            <label>Fecha</label>
            
            <input type="date" class="form-control" name="date">
          
          </div>
        
        </div>
      
      </div>

  		<div class="form-group">
        
        <div class="row">

          <div class="col-md-6">
        
            <label for="">Imagen</label>
            
            <input type="file" class="form-control" name="image">
            
          </div>
          
          <div class="col-md-6">

            <label>Link de descarga</label>
            
            <input type="text" class="form-control" name="url">
          
          </div>
       
        </div>
      
      </div>
      
      @csrf

      <button type="submit" class="btn btn-success">Guardar</button>
  	
    </form>    	

	</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@section('js')

@endsection