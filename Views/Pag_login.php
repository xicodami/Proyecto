<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width-device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DA FILE</title>
        <link rel="shortcut icon" href="../Imagenes/LOGOpeque.png" />
        <meta name="Keywords" content="Progrmacion, Diseño Web, GestorDocumental, Gestores, Software" />
        <meta name="Author" description="Damian Esteban Alarcon Pinzon" />

        <!-- BOOTSTRAP CSS-->
        <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css" />
        <!-- CUSTOM CSS-->
        <link rel="stylesheet" href="../Styles/Style.css" />

    </head>

    <body>

    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="../index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <img class="bi me-2" src="../Imagenes/Logo.png" width="40" height="32" alt="LogoDAFILE">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="../index.html" class="nav-link px-2 text-secondary">Inicio</a></li>
                    <li><a href="../index.html" class="nav-link px-2 text-white">Nosotros</a></li>
                </ul>

            <div class="text-end">
                <a href="#">
                    <button type="button" class="btn btn-warning btn-outline-light me-2">Login</button>
                </a>
            </div>
            </div>
        </div>
    </header>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none">

            </div>
            <div class="col bg-white p-5 rounded">

                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido</h2>

                <!--Login-->

                <form action="../DataBase/Login.php" method="POST">
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid my-4">
                        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>

                    <div class="my-3">
                        <span><a href="#">Recupera tu contraseña</a></span>
                    </div>

                    <!--Login_con_redes_sociales-->
                    <div class="container w-100 my-5">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="../Imagenes/Redes/facebook.png"  width="35" alt="">
                                        </div>

                                        <div class="col-10 text-center">
                                            Facebook
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                    <div class="row align-items-center">
                                        <div class="col-2 d-none d-md-block">
                                            <img src="../Imagenes/Redes/google.png"  width="35" alt="">
                                        </div>

                                        <div class="col-10 text-center">
                                            Google
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- BOOTSTRAP_SCRIPTS-->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- CUSTOM_SCRIPTS-->
    <script src="../JS/"></script>

    </body>
</html>
