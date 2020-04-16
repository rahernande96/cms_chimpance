@extends('layouts.app')
@section('css')
<style type="text/css">
  
  .pointer:hover{
    cursor: pointer;
  }


.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}


</style>
@endsection
@section('content')
<div class="box box-default">

  <div class="box-header with-border">
  
    <i class="fa fa-retweet"></i>

    <h3 class="box-title">Reordenar Slides</h3>
    <div class="pull-right">
      <form class="form-inline" method="get">
        <div class="form-group">
          <label for="">slides por idioma</label>
          <select class="form-control" name="lang">
            @if($lang == "es")
              <option value="es">Español</option>
              <option value="en">English</option>
            @else 
              <option value="en">English</option>
              <option value="es">Español</option>
            @endif
          </select>
        </div>
        <button class="btn btn-success">Filtrar</button>
        <button id="btn-save" class="btn btn-success">Guardar</button>
      </form>

      
    </div>
  </div>

  <div class="box-body">
    <div class="table-responsive">

      <table id="sort" class="grid table">

        <thead>
            <tr>
              <th>No.</th>
              <th>Archivo</th>
              <th>Idioma</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @php
            $i=1;
          @endphp
          @forelse($imgs as $img)
            <tr class="table-values">
              <td class="index">{{$i++}}</td>
              <td>
                @php
                  $info = pathinfo(storage_path().$img->url_image);
                  $ext = $info['extension'];
                @endphp

                  @if($ext == "mp4" || $ext == "webm")
                      
                      <video style="max-width: 300px; max-height: 150px;" controls>
                        
                        <source src="{{ Storage::disk('public')->url($img->url_image) }}" type="video/{{$ext}}">
                      Your browser does not support the video tag.
                      
                      </video>
                    
                  
                  @else
                  
                  <img style="max-width: 300px; max-height: 150px;" src="{{ Storage::disk('public')->url($img->url_image) }}" class="img-responsive img-show">
                  
                  @endif
              </td>
              <td class="img-lang">
                <h4>{{$img->lang}}</h4>
              </td>
              <td class="img-id  hidden">{{$img->id}}</td>
              <td>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal{{$img->id}}">
                  <i class="fa fa-pencil"></i>
                </button>
                @include('modals.modal-slide')
              </td>
              <td>
                <form action="{{ route('news-destroy') }}" method="post">

                  <input name="id" type="hidden" value="{{ $img->id }}">

                  @csrf
                        
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>

          @empty
            <p>
            No hay Slides por los momentos
            </p>
          @endforelse
        </tbody>
      </table>

    </div>

  </div>

</div>

@endsection
@section('js')
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous">
</script>
<script>
    var fixHelperModified = function(e, tr) {
      var $originals = tr.children();
      var $helper = tr.clone();
      $helper.children().each(function(index) {
          $(this).width($originals.eq(index).width())
      });
      return $helper;
    },
    updateIndex = function(e, ui) {
        $('td.index', ui.item.parent()).each(function (i) {
            $(this).text(i + 1);
        });
    };

  $("#sort tbody").sortable({
      helper: fixHelperModified,
      stop: updateIndex
  }).disableSelection();

  $( document ).ready(function() {
    $("#btn-save").click(function(){
      var array = [];
      var index = "";
      var id = "";
      var lang="";
      $("#sort > tbody > tr ").each(function() 
      {

        array[$(this).find(".index").text()] = $(this).find(".img-id").text();
        lang = $(this).find(".img-lang").text();
      });

      $.ajax({
        type: "POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('news-order') }}",
        data: {// change data to this object
           order : array,
           lang: lang,
        },
        dataType: "text",
        success: function(response,status)
        {
          console.log(response);
          location.reload();
        }
      });
      
    });
  });

  $(document).ready(function(){
    var width = $("img.img-show").width();
    var height = $("img.img-show").height();
    $('.video-show').width(width).height(height)
  });
</script>
@endsection
