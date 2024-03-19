<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse  navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('amit')}}">Service</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('todo')}}">Todo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('crud.index')}}">Resource</a>
          </li>
          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">Logout</a>
          </li>

          @else

          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>

          @endif



          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">{{Auth::check()? Auth::user()->name : ''}}


            </a>
          </li>



        </ul>

      </div>
    </div>
  </nav>
