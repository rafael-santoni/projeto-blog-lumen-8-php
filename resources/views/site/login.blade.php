@extends('site.master')

@section('content')

<h2>Login</h2>

<form action="/login" method="post">
  <input type="text" name="email" id="" value="rafael@email.com" />
  <input type="password" name="password" id="" value="123" />
  <button type="submit">Login</button>
</form>


@stop
