<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Empresa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="images/logo.png" alt="Logo" height="36" class="me-2">
                    <span>EmpresaLoL</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="empresa.php#quienes-somos">Quiénes somos</a></li>
                                <li><a class="dropdown-item" href="empresa.php#equipo">Nuestro equipo</a></li>
                                <li><a class="dropdown-item" href="empresa.php#mision">Misión</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="servicios.php">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Acceso</button>
            </div>
        </nav>

        <!-- Container -->
        <div class="container-fluid bg-light py-4">
            <div class="container">
                <!-- Sección Quiénes somos -->
                <section id="quienes-somos" class="mb-5">
                    <h2>Quiénes Somos</h2>
                    <p class="mt-3">Somos una comunidad y plataforma creada por y para apasionados de League of Legends. Nacimos con la idea de facilitar a los invocadores el acceso a RP, aspectos (skins) e ítems exclusivos de forma rápida, segura y al mejor precio.</p>
                    <p>Pero no nos quedamos solo en la tienda: nos apasiona el aprendizaje y la mejora continua en la Grieta del Invocador. Por eso, compartimos tutoriales, guías de campeones, análisis de meta y consejos de macrogame para ayudarte a subir de división, salir de Hardstuck y dominar cada partida.</p>
                </section>

                <hr>

                <!-- Sección Nuestro equipo -->
                <section id="equipo" class="my-5">
                    <h2>Nuestro Equipo</h2>
                    <ul class="list-group list-group-flush mt-3">
                        <li class="list-group-item bg-transparent">
                            <h5>Claudio González</h5>
                            <p class="mb-0 text-muted">CEO & Main jungla (Especialista en Soporte al Cliente).</p>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <h5>Tyler1</h5>
                            <p class="mb-0 text-muted">Creador de Contenido & pro gamer (Guías y Tutoriales).</p>
                        </li>
                        <li class="list-group-item bg-transparent">
                            <h5>Faker</h5>
                            <p class="mb-0 text-muted">Jesucristo</p>
                        </li>
                    </ul>
                </section>

                <hr>

                <!-- Sección Misión -->
                <section id="mision" class="mt-5">
                    <h2>Misión y Visión</h2>
                    <h5 class="mt-3">Nuestra Misión</h5>
                    <p class="text-muted">Proporcionar a la comunidad de League of Legends un servicio confiable y accesible para adquirir RP y contenidos dentro del juego, complementado con contenido educativo y guías de calidad que impulsen el nivel de juego de cada invocador.</p>

                    <h5 class="mt-3">Nuestra Visión</h5>
                    <p class="text-muted">Convertirnos en el portal de referencia para la comunidad de League of Legends en la región, destacados no solo por la seguridad y rapidez en nuestras ventas, sino por ser el espacio donde los jugadores acuden para aprender, mejorar su nivel competitivo y equipar a sus campeones favoritos.</p>
                </section>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid bg-dark text-white text-center py-3">
            <strong>EmpresaLoL@2026</strong>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Autenticación</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="empresa.php">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>