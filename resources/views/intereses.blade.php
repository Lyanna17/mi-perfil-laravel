<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intereses - Abigail Vargas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <nav class="navegacion">
        <div class="nav-container">
            <h1 class="nav-titulo">Abigail Vargas Argüello</h1>
            <ul class="nav-menu">
                <li><a href="perfil.blade.php" class="nav-link">Perfil</a></li>
                <li><a href="intereses.blade.php" class="nav-link activo">Intereses</a></li>
                <li><a href="habilidades.blade.php" class="nav-link">Habilidades</a></li>
                <li><a href="metas.blade.php" class="nav-link">Metas</a></li>
            </ul>
        </div>
    </nav>

    <main class="contenedor">
        <section class="seccion">
            <h2 class="seccion-titulo">💡 Pasatiempos y Gustos</h2>
            
            <div class="grid-intereses">
                <div class="tarjeta-interes">
                    <div class="interes-icono">🔒</div>
                    <h3 class="interes-titulo">Ciberseguridad</h3>
                    <p class="interes-descripcion">
                        Me apasiona el mundo de la seguridad informática, desde el análisis de vulnerabilidades 
                        hasta la protección de sistemas. Estoy constantemente aprendiendo sobre técnicas de 
                        hacking ético, análisis forense digital y protección de datos.
                    </p>
                </div>

                <div class="tarjeta-interes">
                    <div class="interes-icono">🎮</div>
                    <h3 class="interes-titulo">Videojuegos</h3>
                    <p class="interes-descripcion">
                        Los videojuegos son una de mis grandes pasiones. No solo los disfruto como entretenimiento, 
                        sino que también me interesa su desarrollo, mecánicas y narrativas. Me encanta explorar 
                        diferentes géneros y analizar el diseño de juegos.
                    </p>
                </div>

                <div class="tarjeta-interes">
                    <div class="interes-icono">🎨</div>
                    <h3 class="interes-titulo">Arte</h3>
                    <p class="interes-descripcion">
                        El arte es mi forma de expresión creativa. Disfruto del dibujo digital y tradicional, 
                        explorando diferentes estilos y técnicas. El arte me permite equilibrar mi lado técnico 
                        con la creatividad y la imaginación.
                    </p>
                </div>

                <div class="tarjeta-interes">
                    <div class="interes-icono">🎵</div>
                    <h3 class="interes-titulo">Música</h3>
                    <p class="interes-descripcion">
                        La música es parte fundamental de mi vida. Me fascina tanto escucharla como crearla. 
                        Experimento con producción musical y composición, y sueño con formar parte de un 
                        proyecto musical colaborativo donde pueda compartir mi pasión.
                    </p>
                </div>
            </div> 
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2024 Abigail Vargas Argüello - Portafolio Personal</p>
    </footer>
</body>
</html>