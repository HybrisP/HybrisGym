<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand fs-4" href="{{route('homepage')}}">HybrisGym</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item fs-5">
            <a class="nav-link @if(Route::currentRouteName()==='class') active @endif" href="{{route('class')}}">Corsi</a>
          </li>
          <li class="nav-item fs-5">
            <a class="nav-link @if(Route::currentRouteName()==='contact') active @endif" href="{{route('contact')}}">Contatti</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>