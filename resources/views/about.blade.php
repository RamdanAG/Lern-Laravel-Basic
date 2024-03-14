@extends('layout.main')

@section('container')
    <h1>halaman Blog</h1>

    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="" width="40%">
@endsection