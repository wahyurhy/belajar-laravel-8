@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @foreach ($categories as $category)
        <ul>
            <li><h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        </ul>
    @endforeach
@endsection
