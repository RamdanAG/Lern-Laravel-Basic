@extends('layout.main')

@section('container')

@foreach($posts as $post)

<article class="mb-5">
<h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
<p>{{$post->excerpt}}</p>
</article>

@endforeach

@endsection
