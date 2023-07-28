<div class="pb-5">
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow px-2">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="{{route('homepage')}}">{{config("app.name")}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav fst-italic">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/account" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('account')}}">Il mio Account</a></li>
              <li><a class="dropdown-item" href="{{route('account.articles')}}">I miei Articoli</a></li>
              <li><a class="dropdown-item" href="{{route('articles.create')}}">Crea Articolo</a></li>
              <li><a class="dropdown-item" href="{{route('categories.create')}}">Crea Categoria</a></li>
              @if(auth()->user()->role == "Admin")
              <li>
                <a class="dropdown-item text-primary" href="{{route('admin.index')}}">Pannello Admin</a>
              </li>
              @endif
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="btn fst-italic text-danger">Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @foreach($linkNav as $key => $link)
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{$key}}">{{$link}}</a>
          </li>
          @endforeach
          @else
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/register">Registrati</a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>
</div>