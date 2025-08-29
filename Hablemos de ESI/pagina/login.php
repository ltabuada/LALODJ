<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="website icon" type="png" href="../img/logo_negro_icono_QVEF.png">
    <!-- Fuentes e iconos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,800;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Hablemos de ESI</title>
</head>
<body>
    <main>
        <form id="registro1" action="login.php" method="post">
            <div class="imagen">
                <a href="./index.html"><img src="../assets/IMG-ESILogo.png" alt="logo"></a>
            </div>
            <div class="titulo">
                <h2>INICIAR SESION</h2>
            </div>

            <div class="login">
                <div class="ingreso">
                    <label>Email
                        <input type="email" name="email" required>
                    </label>
                </div>
                <div class="ingreso">
                    <label>Contraseña
                        <input type="password" name="contrasena" required>
                    </label>
                </div>
                <div class="boton">
                    <button>Enviar</button>
                </div>
                <div class="goregister">
                    <p>No tenes cuenta? <a href="./register.html"> Registrate acá!</a></p>
                </div>
            </div>
        </form>
    </main>

    <footer>
    </footer>
</body>
</html>