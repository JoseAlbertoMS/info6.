{{--  Se extiende de la plantilla master, el cual tiene la estructura basica HTML
      , y se rellena en la seccion 'content' con un Titulo, un ancla que redirecciona
      al formulario de creacion, tiene clases de bootstrap que lo covierten en un boton.  
      Hay una tabla donde se definen los encabezados y con un foreach se recorren todos
      los posts, posts fue la variable enviada por el controlador y fue obtenida a partir 
      de los registros de la base de datos que facilito el modelo Posts y se listan 
      individualmente en su propio renglon, todos cuentan con la opcion de eliminar y 
      editar el registro --}}

@extends('layouts.master')

@section('content')
    <h1>Post</h1>

    <a href="{{ route('post.create') }}" class="btn btn-success">Create</a>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Title</th>
          <th scope="col">Url</th>
          <th scope="col" colspan="2">Options</th>{{--  El atributo colspan="2" sirve para que la columna ocupe dos elementos, editar y eliminar  --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>{{ $post->url_clean }}</td>
            <td>
              <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
            </td>
            <td> 
              
              <button data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-id="{{ $post->id }}" type="submit" class="btn btn-danger">Delete</button>
            
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-3">{{ $posts->links() }}</div>

<div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Estás seguro de borrar el registro seleccionado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form id="formDelete" action="{{ route('post.destroy', 0) }}" method="POST">
          @csrf
          @method("DELETE")
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  var deleteModal = document.getElementById('deleteModal')
  deleteModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalTitle = deleteModal.querySelector('.modal-title')
    var action = formDelete.getAttribute('action').slice(0, -1) + id;
    //console.log(action)
    formDelete.setAtribute('action', action)
    modalTitle.textContent = 'Post ' + id
})
</script>
@endsection
