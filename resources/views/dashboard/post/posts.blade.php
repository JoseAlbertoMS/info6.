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
              <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
