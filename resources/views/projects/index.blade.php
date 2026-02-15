@extends("layouts.projects")
@section("title", "Tutti i post")
@section("content")
  <div class="container">


    <table class="table">
      <thead>

        <th>Titolo</th>
        <th>Autore</th>
        <th>Categoria</th>
        <th>&nbsp;</th>
        <th class="d-flex justify-content-end">
          <a class="btn btn-primary" href="{{ route('project.create')}}">Aggiungi Progetto</a>
        </th>
      </thead>
      <tbody>

        @foreach($projects as $project)
          <tr>
            <td>{{$project->title}}</td>
            <td>{{$project->author}}</td>
            <td>{{$project->category}}</td>
            <td><a href="{{ route("project.show", $project) }}" class="btn btn-primary">Visualizza</a></td>
            <td>
              <div class="d-flex p-2 gap-2">
                <a class="btn btn-warning" href="{{ route('project.edit', $project) }}">Modifica</a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Elimina
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                  aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina il Progetto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Vuoi eliminare definitivamente il progetto?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{ route('project.destroy', $project) }}" method="POST">
                          @csrf
                          @method("DELETE")
                          <input type="submit" class="btn btn-danger" value="Elimina">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>



              </div>
            </td>
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>

@endsection