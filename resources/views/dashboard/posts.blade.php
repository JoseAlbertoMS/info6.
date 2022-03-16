@extends('layouts.master')

@section('content')
    <form action="" method="POST">
        <div class="form-group">
          <label for="title">Titulo</label>
          <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
          <label for="url_clean">URL limpia</label>
          <input type="text" name="url_clean" class="form-control" id="url_clean">
        </div>

        <div class="form-group">
          <label for="content">Contenido</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>

        <input type="submit" value="Enviar" class="btn btn.primary">
      </form>
@endsection
