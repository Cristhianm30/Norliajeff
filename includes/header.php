<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO</title>

    <!-- Incluyendo CSS de Bootstrap desde CDN -->
    <!--SE QUITO EL LINK DE BOOSTRAP YA QUE SERIA REPETITIVO AL ESTAR TAMBIEN EN EL STYLE.CSS-->
    <!--SE MODIFICARN LAS RUTAS NUEVAMENTE Y SE PASARON A RELATIVAS YA QUE NO CARGABAN-->

    <!-- Incluyendo hoja de estilos personalizada -->
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="fondo">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-black font-weight-bold" href="#">NORLIAJEFF</a>

            <!-- Botón de menú para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mi-menu" aria-controls="mi-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido del menú -->
            <div class="collapse navbar-collapse justify-content-end" id="mi-menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="../templates/login.php" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="../templates/preguntas.php" class="nav-link">Preguntas Frecuentes</a></li>
                </ul>
            </div>
        </div>
    </nav>