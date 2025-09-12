<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larika</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href = "css/default.css" rel="stylesheet" />
</head>
<body>
    <nav class= "navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/ham-ico-64.png" alt="" width="32" height="32">
                Larika 
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" 
                    aria-controls="navbarMain" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home Page</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="-menuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Cardápio</a>
                        <ul class= "dropdown-menu" aria-labelledby="menuLink">
                            <li>
                                <a class="dropdown-item" href="#">Hamburguer</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Hot Dog</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Batatas Recheadas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Petiscos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Bebidas</a>
                            </li>
                    </ul>
                    </div>
        </div>
    </nav>
            <div id="carouselExemploControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./img/hamburger-h500.png" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/hotdog-h500.png" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/potato-h500.png" class="d-block" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/snacks-h500.png" class="d-block" alt="...">
                </div>
            </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExempleControls"
                data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next-icon" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next"> 
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
            </button>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>