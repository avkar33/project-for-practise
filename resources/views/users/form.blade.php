{{-- <a href="{{route('change_locale', __('user.other.locale'))}}">@lang('user.other.change_locale')</a> --}}

<label for="name">@lang('user.form.name')</label>
<input type="text" name="name" value='{{ $user->name ?? '' }}'>
<label for="email">@lang('user.form.email')</label>
<input type="text" name="email" value='{{ $user->email ?? '' }}'>
<label for="password">@lang('user.form.password')</label>
<input type="password" name="password" value='{{ $user->password ?? '' }}'>

<input type="submit" value="Отправить>">
 