@extends("layouts.projects")
@section("title", "Tutti i post")
@section("content")
  <div class="container">
    <a class="btn btn-primary" href="{{ route('project.create')}}">Aggiungi Progetto</a>

    <table>
      <thead>
        <tr>
          <th>Titolo</th>
          <th>Autore</th>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>

        @foreach($projects as $project)
          <tr>
            <td>{{$project->title}}</td>
            <td>{{$project->author}}</td>
            <td>{{$project->category}}</td>
            <td><a href="{{ route("project.show", $project) }}">Visualizza</a></td>
          </tr>
        @endforeach
      </tbody>

    </table>
  </div>

@endsection