@extends('layouts.app')

@section('content')
    <table border='1'>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{route('users.create')}}">Создать</a>
@endsection
