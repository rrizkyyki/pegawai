<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Pegawai</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>

          @if (Auth::check())
              <li class="nav-item">
                <a href="/create" class="nav-link">Add</a>
              </li>
          @endif

          @if (!Auth::check())

            <li class="nav-item">
              <a class="nav-link" href="/login">SignIn</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/register">SignUp</a>
            </li>

          @endif
        </ul>

        <ul class="navbar-nav ms-auto">
          @if (Auth::check())

            <li class="nav-item dropdown me-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">SignOut</button>
                  </form>
                </li>
              </ul>
            </li>

          @endif
        </ul>
      </div>
    </div>
</nav>