    @if ($errors)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <label for="name">Имя</label>
    <input type="text" name="name" value="{{old('name')}}">

    <label for="email">email</label>
    <input type="text" name="email" value="{{old('email')}}">

    <label for="password">password</label>
    <input type="password" name="password">
    <hr>
    <button type="sumbit">Отправить</button>
