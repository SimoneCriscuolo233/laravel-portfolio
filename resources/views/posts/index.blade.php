@extends("layouts.posts")
@section("title", "Tutti i post")
@section("content")
<table>
  <thead>
    <tr>
     <th>Titolo</th>
     <th>Autore</th>
     <th>Categoria</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($posts as $post)
    <tr>
      <td>{{$post->title}}</td>
      <td>{{$post->author}}</td>
      <td>{{$post->category}}</td>
    </tr>
    @endforeach
  </tbody>
    
</table>

@endsection