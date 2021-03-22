@extends('layouts.app')

@section('title', 'names')

@section('content')
    @isset($names)
        @foreach ($names as $name)
            {{ $name->fio }}
            <br />
        @endforeach
    @endisset
@endsection
