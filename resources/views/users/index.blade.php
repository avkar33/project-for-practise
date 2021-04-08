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
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{route('user.edit', $user->id)}}">Редактировать</a></td>
            @endforeach
        </tbody>
    </table>
</body>

</html>
