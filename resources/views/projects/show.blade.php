@extends("layouts.projects")
@section("title",$project->title)
@section("content")

<h2>
  - {{$project->author}}
</h2>
<small>
   {{$project->category}}
</small>
<section>
{{$project->content}}
</section>

@endsection