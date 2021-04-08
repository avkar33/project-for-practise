@extends('layouts.app')

@section('content')
<form action="{{route('user.store')}}" method="post">
    @csrf
    @include('users.form')
</form>
@endsection