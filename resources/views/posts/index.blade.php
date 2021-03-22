@extends('layouts.app')

@section('title', 'posts')

@section('content')
    @isset($posts)

        @foreach ($posts as $post)
            {{ $post->title }}
            <br />
            {{ $post->text }}
            <br />
        @endforeach
    @endisset

@endsection
