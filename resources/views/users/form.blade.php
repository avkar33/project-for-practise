<label for="name">Name</label>
<input type="text" name="name" value='{{ $user->name ?? '' }}'>
<label for="email">email</label>
<input type="text" name="email" value='{{ $user->email ?? '' }}'>
<label for="password">password</label>
<input type="password" name="password" value='{{ $user->password ?? '' }}'>

<input type="submit" value="Отправить>">
