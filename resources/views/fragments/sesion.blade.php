{{--  Si status es llamado entonces crea un div con la clase alert-success
  para mostrar un mensaje de creacion exitoso que imprime el mensaje que se
  haya definido en el controlador  --}}
@if(session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status')}}
  </div>
@endif