@extends('layouts.app')
@section('css')

@endsection

@section('content')
<div class="box box-default">

	<div class="box-header with-border">
	
		<i class="fa fa-upload"></i>

	  	<h3 class="box-title">Editar Catálogos</h3>

	</div>

	<!-- /.box-header -->

	<div class="box-body">

  	<form action="{{ route('catalogue-update') }}" method="post" enctype="multipart/form-data">

      <div class="form-group">

        <div class="row">
          
          <div class="col-md-6">
            
            <label for="">Nombre</label>
            
            <input type="text" class="form-control" name="name" value="{{$catalogue->name}}">
          
          </div>
          
          <div class="col-md-6">
            
            <label>Fecha</label>
            @php
              $date = new DateTime($catalogue->date);
            @endphp
            <input type="date" class="form-control" name="date" value="{{$date->format('Y-m-d')}}">
          
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
            
            <input type="text" class="form-control" name="url" value="{{$catalogue->url_download}}">
          
          </div>
       
        </div>
      
      </div>
      
      @csrf

      <input name="id" type="hidden" value="{{ $catalogue->id }}">

      <button type="submit" class="btn btn-success">Guardar</button>
  	
    </form>    	

	</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@section('js')

@endsection