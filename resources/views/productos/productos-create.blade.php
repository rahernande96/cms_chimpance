@extends('layouts.app')
@section('css')
<style type="text/css">
	#my-awesome-oferta {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    margin-left: auto;
    margin-right: auto;
}

#my-awesome-destacado {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(56, 196, 154);
    border-image: none;
    margin-left: auto;
    margin-right: auto;
}

#my-awesome-novedades {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(163, 149, 48);
    border-image: none;
    margin-left: auto;
    margin-right: auto;
}
</style>

@endsection
@section('content-header')
	<h1>
        Subir Productos
    </h1>
  	<ol class="breadcrumb">
    	<li><a href="#"><i class="fa fa-upload"></i> Dashboard</a></li>
      <li>Subir Productos</li>
    	
    </ol>
@endsection

@section('content')
<div class="box box-default">

	<div class="box-header with-border">
	
		<i class="fa fa-upload"></i>

	  	<h3 class="box-title">Arrastra la imagen hasta la categoria deseada</h3>

	</div>

	<!-- /.box-header -->

	<div class="box-body">

  	<form action="{{ route('product-store') }}" class="dropzone" id="my-awesome-oferta">
  		<input type="hidden" name="category" value="ofertas">
      @csrf
  	
    </form> 

    <br>

    <form action="{{ route('product-store') }}" class="dropzone" id="my-awesome-destacado">
      <input type="hidden" name="category" value="destacados">
      @csrf
    
    </form>

    <br>

    <form action="{{ route('product-store') }}" class="dropzone" id="my-awesome-novedades">
      <input type="hidden" name="category" value="novedades">
      @csrf
    
    </form>    	

	</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@section('js')

<script type="text/javascript">


Dropzone.options.myAwesomeOferta = {
 
  maxFilesize: 5, // MB
  addRemoveLinks:true,
  dictCancelUpload:true,
  //maxFiles:2 ,
  acceptedFiles:"image/*",
  dictDefaultMessage:"Subir Imagenes a Ofertas",
  paramName:"img",
  success: function (file, response) 
  {
    console.log(response);
  }
};



Dropzone.options.myAwesomeDestacado = {
 
  maxFilesize: 5, // MB
  addRemoveLinks:true,
  dictCancelUpload:true,
  //maxFiles:2 ,
  acceptedFiles:"image/*",
  dictDefaultMessage:"Subir Imagenes a Destacados",
  paramName:"img",
  success: function (file, response) 
  {
    console.log(response);
  }
};

Dropzone.options.myAwesomeNovedades = {
 
 
  maxFilesize: 5, // MB
  addRemoveLinks:true,
  dictCancelUpload:true,
  //maxFiles: 2,
  acceptedFiles:"image/*",
  dictDefaultMessage:"Subir Imagenes a Novedades",
  paramName:"img",
  success: function (file, response) 
  {
    console.log(response);
  }
};  
    

</script>
@endsection