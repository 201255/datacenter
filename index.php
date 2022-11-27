<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./src/img/favicon.ico">
    <title>Data Center</title>
    <!--Bootstrap 5.1-->
    <link href="./src/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
require("./src/config/conexion.php");
require("./src/controllers/loginController.php");

?>
    <section class="vh-100" style="background-color: #94250D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block"><br><br><br>
                                <img src="./src/img/ico1024.png" alt="login form" class="img-fluid" style="border-radius: 2rem 0 0 2rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form method="POST">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">
                                                <img src="./src/img/logo2.png" alt="login form" class="img-fluid" style="border-radius: 2rem 0 0 2rem;" />
                                            </span>
                                        </div>
    
                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Inicie sesión en su cuenta
                                        </h5>
    
                                        <div class="form-outline mb-4">
                                            <input name= "email" type="email" id="form2Example17" class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>
    
                                        <div class="form-outline mb-4">
                                            <input name= "password" type="password" id="form2Example27"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <input name="btningresar" class="btn btn-dark btn-lg btn-block" type="submit" value="Entrar">
                                        </div>
                                        
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
        </div>
    </section>
    <!--Bootstrap JS-->
    <script src="./src/js/bootstrap.bundle.min.js"></script>
</body>
</html>