<div class="row mt-5">

    <div class="col-sm-8 offset-sm-2">
    
      <form action="/update/{{ $post->id }}" method = "post">
        @csrf
        @method('PATCH')
    
        <div class="form-group">
          <label for="title">title:</label>
          <input type="text" name = "title" id = "title" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="description">description</label>
          <input type="text" name = "description" id = "description" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>