<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table border='1'>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Эмаил</th>
                <th>Аватар</th>
                <th>Посты</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->avatar->avatar ?? '' }}</td>
                    <td>
                        @forelse ($user->posts as $post)
                            <a href="{{ route('post.show', $post) }}">{{ $post->title }}</a> /
                        @empty
                            Нет постов
            @endforelse
            </td>
            <td>
                @forelse ($user->roles as $role)
                    <a href="{{route('role.show', $role)}}">{{ $role->role }}</a> /
                @empty
                    Нет ролей
                @endforelse
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
