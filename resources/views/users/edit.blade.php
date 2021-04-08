@extends('layouts.app')

@section('content')
<form action="{{route('user.update', $user)}}" method="post">
    @csrf
    @method('put')
    @include('users.form')
</form>
@endsection