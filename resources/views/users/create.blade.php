@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('users.store')}}">
        @csrf
        @include('users.partials.form')
    </form>

@endsection
