<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8927fd28af.js" crossorigin="anonymous"></script>
    

    <title>Gestión Notas</title>
  </head>
  <body>
    
  <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="img/logo.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        App Notas
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#formularioNota">Crear Nota</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar nota" aria-label="Search">
            <button class="btn btn-info" type="submit">Buscar</button>
        </form>
        </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3">
        <div class="col-sm-3">
           
          <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Prueba web</div>
            <div class="card-body">
              <span class="badge bg-secondary">
                Publicado el: 27-03-2024
              </span>
              <span class="badge bg-danger">
                Entregar el: 01-04-2024
              </span>
              <p class="card-text mt-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

              <span class="badge bg-success">
                Estado: Realizado
              </span>
              
              <div class="row mt-2">
                <div class="col-6 d-grid">
                    <button type="button" class="btn btn-sm btn-info">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </div>
                <div class="col-6 d-grid">
                  <button type="button" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-trash-can"></i>
                  </button>
                </div>
              </div>
            
            </div>
          </div>

        </div>
                
    </div>
  </div>


  <?php
    
    include("modal.php");
  
  ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
 
  </body>
</html>