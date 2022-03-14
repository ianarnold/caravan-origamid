<!DOCTYPE html>
<head>
    <title>Caravan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav
        class="navbar fixed-top navbar-expand-md navbar-light bg-light py-3 box-shadow">
        <a href="#" class="navbar-brand">
            <img src="img/caravan.svg" alt="Logo Caravan">
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Locais
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="local.html">California</a>
                        <a class="dropdown-item" href="local.html">Paris</a>
                        <a class="dropdown-item" href="local.html">Dublin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="planos.html" class="nav-link">
                        Planos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contato.html" class="nav-link">
                        Contato
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn btn-outline-primary ml-md-2">
                        Inscreva-se
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="container-fluid">
        <div class="row bg-dark text-white">

            <div class="col-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/california.jpg" alt="California">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/dublin.jpg" alt="Dublin">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/paris.jpg" alt="Paris">
                        </div>
                    </div>
                    <a
                        class="carousel-control-prev"
                        href="#carouselExampleIndicators"
                        role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a
                        class="carousel-control-next"
                        href="#carouselExampleIndicators"
                        role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-5 p-4">
                <h1 class="display-4">Realize a viagem do seu sonho</h1>
                <p class="lead">O melhor local para viajar é com a Caravan, mais de 5.000 excursões concluídas.</p>
                <form action="#">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Email">
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="button">Inscreva-se</button>
                        </span>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>