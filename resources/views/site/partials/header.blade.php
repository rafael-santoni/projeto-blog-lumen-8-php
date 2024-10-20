<div class="header">

  <ul class="header-links">
    <li><a href="/">Home</a></li>
    <li><a href="/protect">Protect</a></li>
    <li><a href="/login">Login</a></li>
  </ul>

  <div class="header-status-login">
    Olá,
    @if (Auth::user())
      {{ Auth::user()->firstName }} {{ Auth::user()->lastName }} | <a href="/logout">Logout</a>
    @else
      Visitante
    @endif
  </div>

</div>