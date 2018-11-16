@extends('layouts.app')
@section('css')
<style type="text/css">
	#my-awesome-dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    margin-left: auto;
    margin-right: auto;
}
</style>
@endsection
@section('content-header')
	<h1>
        Dashboard
    </h1>
  	<ol class="breadcrumb">
    	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    	
    </ol>
@endsection

@section('content')
<div class="box box-default">

	<div class="box-header with-border">
	
		<i class="fa fa-upload"></i>

	  	<h3 class="box-title">Subir Imagen</h3>

	</div>

	<!-- /.box-header -->

	<div class="box-body">


	
    	<form action="{{ route('news-store') }}" class="dropzone" id="my-awesome-dropzone">
    		@csrf
    	</form>

  			

    	

	</div>
<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@section('js')

<script type="text/javascript">
	

Dropzone.options.myAwesomeDropzone = {
 
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  addRemoveLinks:true,
  maxFiles: 6,
  dictDefaultMessage:"Haz click aquí o arrastra los archivos aquí para subirlos",
  paramName:"img",
  success: function (file, response) 
  {
        console.log(response);
        if(response==0)
        {
        	this.options.maxFiles = 0
        }
  }
};
    
    

</script>
@endsection