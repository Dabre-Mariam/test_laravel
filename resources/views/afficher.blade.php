<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    <main class="container">
        {{-- <form method="POST" action="{{url('/afficher_etudiant', [$etudiant->id])}}"> --}}
        <h2>Information sur l'étudiant {{$etudiant->id}}</h2>
            @csrf
            <div class="mb-3">
              <label for="exampleInputText1" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="exampleInputText" aria-describedby="inputHelp" value="{{$etudiant->nom}}" readonly>
            </div>

            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Prénoms</label>
                <input type="text" name="prenom" class="form-control" id="exampleInputText" aria-describedby="inputHelp" value="{{$etudiant->prenom}}" readonly>
              </div>

              <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Âge</label>
                <input type="number" name="age" class="form-control" id="exampleInputText" aria-describedby="inputHelp" value="{{$etudiant->age}}" readonly>
              </div>


              <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Classe</label>
                <input type="text" name="classe" class="form-control" id="exampleInputText" aria-describedby="inputHelp" value="{{$etudiant->classe}}" readonly>
              </div>

              <a href="{{url('/etudiant_page')}}" type="button" class="btn btn-primary">Retour à la page d'accueil</button></a>
           
          {{-- </form> --}}
    </main>
      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>