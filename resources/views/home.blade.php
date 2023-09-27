@extends("layouts.public")

@section("content")
<ul>
    @foreach($movies as $movie)
        <li>{{$movie["title"]}}</li>
    @endforeach
</ul>
@endsection
