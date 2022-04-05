{{--Se extiende de la plantilla master, se rellena la seccion content
    con un titulo, se incluye la validacion de errores y la sesion.
    Se crea un formulario que llama al metodo store para insertar un
    registro que proviene del metodo create, mediante el metodo post, 
    dentro del formulario se llama a _form para mostrar el formulario
    de creacion.
    --}}

@extends('layouts.master')

@section('content')
    <h1>Post</h1>
    @include('fragments.validation-errors')
    @include('fragments.sesion')
    <form action="{{ route("post.store") }}" method="POST">
        @csrf
        @include('dashboard.post._form')
    </form>
@endsection

{{--store: Aqui es donde se actualiza un registro en especifico
    que proviene del método create y normalmente redirige al index.
        
    update: Al igual que el store, solo que en vez de provenir de 
    create proviene de edit y en vez de crear un nuevo registro, 
    busca un existente y lo modifica, tambien suele redirigir al index.  --}}