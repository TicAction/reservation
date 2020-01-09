<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{route('home')}}">Site de réservation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li>
        <a class="nav-link" href="{{route('home')}}">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('student_create')}}">Ajouter un de mes enfants</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('location_index')}}">Faire une réservation</a>
      </li>

    </ul>
    <ul  class="nav navbar-nav float-md-right">
      <li>
        <a class="nav-link navbar-text pull-right" href="{{route('logout')}}">Déconnexion</a>
      </li>
    </ul>

  </div>
</nav>
