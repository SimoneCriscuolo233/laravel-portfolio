@extends("layouts.projects")
@section("content")
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h1>
          {{ $project->title }}
        </h1>

      </div>
      <div class="card-body">

        <div class="d-flex p-2 gap-2 justify-content-between">
          <h2 class="card-text">
            - {{$project->author}}
          </h2>
          <div>
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

        </div>

        <small class="card-text">
          {{$project->category}}
        </small>
        <section class="card-text">
          {{$project->content}}
        </section>

      </div>

    </div>
  </div>
@endsection