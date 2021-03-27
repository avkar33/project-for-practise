@extends('layouts.app')

@section('title', 'names')

@section('content')
    @isset($names)
        @foreach ($names as $name)
            {{ $name->fio }}
            <a href="{{route('names.show', [$name->id])}}">Открыть</a>
            <br />
        @endforeach
    @endisset
@endsection
