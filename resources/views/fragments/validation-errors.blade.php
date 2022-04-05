{{--  Si hay cualquier error en los datos ingresados en el formulario
      El div llama a la clase alert alert-danger de bootstrap para mandar 
      un mensaje de error en la vista donde se utilice el formulario.

      Dentro de una lista desordenada se hace un recorrido de los errores 
      que se guardan en la variable $errors y cada uno de ellos se muestra
      como un elemento de lista y son listados uno por uno en el mensaje de
      error.
      
      Para definir las clases de bootstrap es necesario que el codigo que 
      queremos estilizar este dentro de un div que llame a las clases.  --}}

@if ($errors->any())
<div class="alert alert-danger" role="alert">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{  $error }}</li>
    @endforeach
  </ul>
</div>
@endif