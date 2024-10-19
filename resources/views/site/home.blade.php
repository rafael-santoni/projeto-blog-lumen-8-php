@extends('site.master')

@section('content')

<h2>Home do Blog</h2>

<h3>Posts</h3>
<ul>
@foreach ($posts as $post)
  <li><a href="/post/{{ $post->slug }}">{{ $post->title }} - <small>{{ $post->user->firstName }} {{ $post->user->lastName }}</small></a></li>
@endforeach
</ul>

@stop
