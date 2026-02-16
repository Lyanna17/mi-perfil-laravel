<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Abigail Vargas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <nav class="navegacion">
        <div class="nav-container">
            <h1 class="nav-titulo">Abigail Vargas Argüello</h1>
            <ul class="nav-menu">
                <li><a href="perfil.blade.php" class="nav-link activo">Perfil</a></li>
                <li><a href="intereses.blade.php" class="nav-link">Intereses</a></li>
                <li><a href="habilidades.blade.php" class="nav-link">Habilidades</a></li>
                <li><a href="metas.blade.php" class="nav-link">Metas</a></li>
            </ul>
        </div>
    </nav>

    <main class="contenedor">
        <section class="seccion">
            <h2 class="seccion-titulo">📋 Información Personal</h2>
            
            <div class="tarjeta">
                <div class="info-item">
                    <span class="info-label">Nombre Completo:</span>
                    <span class="info-valor">Abigail Vargas Argüello</span>
                </div>

                <div class="info-item">
                    <span class="info-label">Edad:</span>
                    <span class="info-valor">24 años</span>
                </div>

                <div class="info-item">
                    <span class="info-label">Ocupación:</span>
                    <span class="info-valor">Estudiante de Sistemas</span>
                </div>

                <div class="info-item">
                    <span class="info-label">Enfoque Académico:</span>
                    <span class="info-valor">Ingeniería en Sistemas Informáticos</span>
                </div>
            </div>

            <div class="presentacion">
                <h3>Sobre mí</h3>
                <p>
                    Soy una estudiante apasionada por la tecnología y las ciencias de la computación, 
                    con un especial interés en el campo de la ciberseguridad. Me fascina el mundo 
                    digital en todas sus formas, desde la programación hasta el análisis forense digital.
                </p>
                <p>
                    Además de mi formación técnica, tengo un fuerte lado creativo que cultivo a través 
                    del arte, la música y los videojuegos. Creo firmemente en el equilibrio entre la 
                    lógica tecnológica y la expresión artística.
                </p>
            </div>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 Abigail Vargas Argüello - Portafolio Personal</p>
    </footer>
</body>
</html>