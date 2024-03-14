@extends('layout.main')
@section('container')

<article>
<h1>{{$post->title}}</h1>
<p>{!! $post->body !!}</p>

<a href="/blog">Kembali</a>
</article>

@endsection