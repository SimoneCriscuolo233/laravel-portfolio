@extends("layouts.projects")
@section("title", "Modifica un progetto")
@section("content")


  <form action="{{ route("project.update", $project) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-control mb-3 d-flex flex-column">
      <label for="title">Titolo</label>
      <input type="text" name="title" id="title" value="{{ $project->title }}">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
      <label for=author">Autore</label>
      <input type="text" name="author" id="author" value="{{ $project->author}}">
    </div>
    <div class="form-control mb-3 d-flex flex-column">
      <label for="type_id">Tipo</label>
      <select name="type_id" id="type_id">
        @foreach ($types as $type)
          <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? "selected" : ""}}>
            {{ $type->name }}
          </option>
        @endforeach

      </select>
    </div>
    <div class="form-control mb-3 d-flex flex-column">
      <label for="content">Contenuto</label>
      <textarea name="content" id="content" width="100%" rows="5">{{ $project->content }}</textarea>
    </div>
    <input type="submit" value="Salva">
  </form>

@endsection