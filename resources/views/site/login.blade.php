@extends('site.master')

@section('content')

<h2>Login</h2>

<div id="errors"></div>

<form>
  <input type="text" name="email" id="" value="rafael@email.com" />
  <input type="password" name="password" id="" value="123" />
  <button id="btn-login">Login</button>
</form>

@section('scripts')
  <script src="/dist/login.js"></script>    
@endsection
<!-- <script src="/assets/dist/login.js"></script> -->

@stop
