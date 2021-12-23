<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https : //fonts.googleapis.com/css2? family= Roboto:wght@300 & family= Rokkitt:wght@300;700 &famille= Zilla+Slab:ital,wght@1600 & display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    <title>TP LE TRAIL</title>
</head>

<body>

    <header>

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>

        <!-- The HTML5 video element that will create the background video on the header -->
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>

        <!-- The header content -->
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white text-bottom">
                    <h1 class="display-3">LE TRAIL</h1>
                    <p class="lead mb-0">Using HTML5 Video and Bootstrap</p>
                    <div class="espaceperso mt-3">
                        <a href="register.php" class="btn btn-dark">Inscription</a>
                        <a href="login.php" class="btn btn-dark">Connexion</a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!--fin-->
    <nav class="navbar navbar-light sticky-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <img src="assets/img/trail10.jpg" class="img-fluid" alt="PA2 ">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Entraînements
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="training.php">Débutants</a></li>
                                <li><a class="dropdown-item" href="training2.php">Confirmés</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Calculateur
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Calculateur</a></li>
                                <li><a class="dropdown-item" href="#">Graphique</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Diaporama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>

    <!--Fin navbar bootstrap-->
    <div class="container">
        <div class="row">
            <div class="col-12">