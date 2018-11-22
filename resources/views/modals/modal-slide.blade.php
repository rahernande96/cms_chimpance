<!-- Modal -->
<div class="modal fade" id="Modal{{$img->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
      </div>
      <div class="modal-body">
        <form action="{{route('news-update')}}" method="post">
          <div class="row">
            
            <div class="form-group col-md-6">
              
              <label>Título</label>
              
              <input class="form-control" type="text" value="{{$img->title}}" name="title" required>
            
            </div>
            
            <div class="form-group col-md-6">
              
              <label>Descripción</label>
              
              <input class="form-control" type="text" value="{{$img->description}}" name="description" >
            
            </div>
          
          </div>
          
          <div class="row">
            
            <div class="form-group col-md-6">
              
              <label>Título del Boton</label>
              
              <input class="form-control" type="text" value="{{$img->btn_content}}" name="title-btn">
            
            </div>
            
            <div class="form-group col-md-6">
              
              <label>Link del boton</label>
              
              <input class="form-control" type="text" value="{{$img->btn_link}}" name="url">
            
            </div>
          
          </div>
          
          <input type="hidden" name="id" value="{{ $img->id }}">

          @csrf

          <div class="pull-right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>