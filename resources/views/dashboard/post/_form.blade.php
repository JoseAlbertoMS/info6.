    @csrf
      <div class="mb-3">
        <label for="title">Titulo</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>

      <div class="mb-3">
        <label for="url_clean">URL limpia</label>
        <input type="text" name="url_clean" class="form-control" id="url_clean">
      </div>

      <div class="mb-3 form-check">
        <label for="content" class="form-label">Contenido</label>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>