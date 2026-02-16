<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades - Abigail Vargas</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <nav class="navegacion">
        <div class="nav-container">
            <h1 class="nav-titulo">Abigail Vargas Argüello</h1>
            <ul class="nav-menu">
                <li><a href="{{ url('/perfil') }}" class="nav-link">Perfil</a></li>
                <li><a href="{{ url('/perfil/intereses') }}" class="nav-link">Intereses</a></li>
                <li><a href="{{ url('/perfil/habilidades') }}" class="nav-link">Habilidades</a></li>
                <li><a href="{{ url('/perfil/metas') }}" class="nav-link">Metas</a></li>
            </ul>
        </div>
    </nav>

    <main class="contenedor">
        <section class="seccion">
            <h2 class="seccion-titulo">🚀 Skills Técnicas</h2>
            
            <div class="categoria-habilidades">
                <h3 class="categoria-titulo">Lenguajes de Programación</h3>
                <div class="habilidades-grid">
                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">C#</span>
                            <span class="habilidad-nivel">Avanzado</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 85%;"></div>
                        </div>
                        <p class="habilidad-detalle">Desarrollo de aplicaciones de escritorio y backend con .NET</p>
                    </div>

                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">Python</span>
                            <span class="habilidad-nivel">Avanzado</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 80%;"></div>
                        </div>
                        <p class="habilidad-detalle">Scripting, análisis de datos y ciberseguridad</p>
                    </div>

                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">Kotlin</span>
                            <span class="habilidad-nivel">Intermedio</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 70%;"></div>
                        </div>
                        <p class="habilidad-detalle">Desarrollo de aplicaciones móviles para Android</p>
                    </div>
                </div>
            </div>

            <div class="categoria-habilidades">
                <h3 class="categoria-titulo">Herramientas y Software</h3>
                <div class="habilidades-grid">
                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">Unity</span>
                            <span class="habilidad-nivel">Intermedio</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 65%;"></div>
                        </div>
                        <p class="habilidad-detalle">Desarrollo de videojuegos y experiencias interactivas</p>
                    </div>

                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">FL Studio</span>
                            <span class="habilidad-nivel">Intermedio</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 75%;"></div>
                        </div>
                        <p class="habilidad-detalle">Producción musical y composición de beats</p>
                    </div>
                </div>
            </div>

            <div class="categoria-habilidades">
                <h3 class="categoria-titulo">Habilidades Creativas</h3>
                <div class="habilidades-grid">
                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">Dibujo</span>
                            <span class="habilidad-nivel">Avanzado</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 80%;"></div>
                        </div>
                        <p class="habilidad-detalle">Ilustración digital y tradicional, concept art</p>
                    </div>

                    <div class="habilidad-item">
                        <div class="habilidad-header">
                            <span class="habilidad-nombre">Escritura</span>
                            <span class="habilidad-nivel">Avanzado</span>
                        </div>
                        <div class="barra-progreso">
                            <div class="barra-relleno" style="width: 85%;"></div>
                        </div>
                        <p class="habilidad-detalle">Escritura creativa, narrativa y documentación técnica</p>
                    </div>
                </div>
            </div>

            <div class="certificaciones">
                <h3 class="categoria-titulo">Áreas de Especialización</h3>
                <ul class="lista-especialidades">
                    <li> Seguridad Informática y Análisis de Vulnerabilidades</li>
                    <li> Desarrollo de Software Multiplataforma</li>
                    <li> Aplicaciones Móviles Android</li>
                    <li> Desarrollo de Videojuegos</li>
                    <li> Producción Musical Digital</li>
                    <li> Comunicación Técnica y Creativa</li>
                </ul>
            </div>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 Abigail Vargas Argüello - Portafolio Personal</p>
    </footer>
</body>
</html>