@extends("layouts.projects")
@section("title","Aggiungi un progetto")
@section("content")


<form action="{{ route("project.store") }}" method="POST">
  @csrf
  <div class="form-control mb-3 d-flex flex-column">
    <label for="title">Titolo</label>
    <input type="text" name="title" id="title">
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for=author">Autore</label>
    <input type="text" name="author" id="author">
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="category">Categoria</label>
    <input type="text" name="category" id="category">
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="content">Contenuto</label>
    <textarea name="content" id="content" width="100%" rows="5"></textarea>
  </div>
  <input type="submit" value="Salva">
</form>

@endsection 