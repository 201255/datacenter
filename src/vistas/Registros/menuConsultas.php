<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/favicon.ico">
    <title>Menú Principal</title>
    <!--Bootstrap 5.1-->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <section class="vh-100" style="background-color: #94250D;">
        <div class="container py-5 h-100">
            <div class="row">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <section>
                                    <nav class="navbar navbar-expand navbar-light navbar-lg">
                                        <div class="container-fluid">
                                            <a class="navbar-brand" href="#">Inicio</a>
                                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="navbar-toggler-icon"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link active dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Registros
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="./Registros/menuBajas.php">Bajas</a></li>
                                                            <li><a class="dropdown-item" href="./menuConsultas.php">Consultas</a></li>
                                                            <li><a class="dropdown-item" href="./menuModifica.php">Modificaciones</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="./Registros/menuReportes.html">Reportes</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            Histórico de <br>Votaciones
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="#">Consultas</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Reportes</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="true">
                                                            Reportes<br>Especiales
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="#">Avance General</a></li>
                                                            <li><a class="dropdown-item" href="#">Gusanos de Calor</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Apoyos <br>Brindados
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="#">Registro</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Reportes</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Afiliados
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="#">Identificación</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Reportes</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Problemas con <br>
                                                            su INE
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="#">Identificación</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Reportes</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Utilerías del <br>
                                                            Sistema
                                                        </a>
                                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                            <li><a class="dropdown-item" href="#">Importar</a></li>
                                                            <li><a class="dropdown-item" href="#">Exportar</a></li>
                                                            <li><a class="dropdown-item" href="#">Líderes</a></li>
                                                            <li><a class="dropdown-item" href="#">Coordinadores</a></li>
                                                            <li><a class="dropdown-item" href="#">Clientes</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Reportes</a></li>
                                                        </ul>
                                                    </li>

                                                    <!--<li class="nav-item">
                                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                                    </li>-->
                                                </ul>
                                                <!--<form class="d-flex">
                                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                                </form>-->
                                            </div>
                                        </div>
                                    </nav>
                                </section>
                            </div>
                        </div>
                    </div>
                </div> 
            </div><br>
            <div class="row">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-4"> 
                            <div align="center">
                                <img src="../../img/logo2.png" alt="login form" class="img-fluid" style="border-radius: 2rem 0 0 2rem;"/>  
                            </div>
                            <div align="center">
                                <!-- <input type="search" name="busqueda" placeholder="Nombre">
                                <input type="submit" value="Buscar"> -->
                                <!-- <input name= "email" type="email" id="form2Example17" class="form-control form-control-lg" />
                                <div class="pt-1 mb-4">
                                            <input name="btningresar" class="btn btn-dark btn-lg btn-block" type="submit" value="Entrar">
                                        </div> -->
                                        <form method="POST">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">
                                                <img class="img-fluid" style="border-radius: 2rem 0 0 2rem;" />
                                            </span>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input name= "nombre" type="text" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Nombre</label>
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <input name="btningresar" class="btn btn-dark btn-lg btn-block" type="submit" value="Buscar">
                                        </div>
                                        <?php
                                        require("../../controllers/consultasControllers.php")
                                        ?>
                                        
                                        <!--<a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                                                style="color: #393f81;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>-->
                                    </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Bootstrap JS-->
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>