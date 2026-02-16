<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metas - Abigail Vargas</title>
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
            <h2 class="seccion-titulo"> Objetivos Profesionales</h2>
            
            <div class="intro-metas">
                <p>
                    Mis objetivos profesionales reflejan mi pasión por la tecnología y mi deseo de contribuir 
                    positivamente a la sociedad, mientras mantengo un equilibrio con mis intereses creativos y artísticos.
                </p>
            </div>

            <div class="metas-container">
                <div class="meta-principal">
                    <div class="meta-badge">Meta Principal</div>
                    <h3 class="meta-titulo"> Informática Forense en el Sector Público</h3>
                    <p class="meta-descripcion">
                        Mi objetivo principal es trabajar en el campo de la informática forense para una 
                        entidad pública. Deseo contribuir a la investigación de delitos cibernéticos, 
                        análisis de evidencia digital y la protección de la información ciudadana.
                    </p>
                    
                    <div class="submetas">
                        <h4>Pasos para alcanzar esta meta:</h4>
                        <ul class="lista-pasos">
                            <li>
                                <div class="paso-contenido">
                                    <strong>Certificaciones en Ciberseguridad</strong>
                                    <p>Obtener certificaciones como CEH, CHFI o similares en análisis forense digital</p>
                                </div>
                            </li>
                            <li>
                                <div class="paso-contenido">
                                    <strong>Experiencia Práctica</strong>
                                    <p>Realizar prácticas o pasantías en áreas de seguridad informática</p>
                                </div>
                            </li>
                            <li>
                                <div class="paso-contenido">
                                    <strong>Especialización Académica</strong>
                                    <p>Completar estudios de posgrado en ciberseguridad o informática forense</p>
                                </div>
                            </li>
                            <li>
                                <div class="paso-contenido">
                                    <strong>Red de Contactos</strong>
                                    <p>Participar en comunidades y eventos de seguridad informática</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="impacto">
                        <h4>Impacto Esperado:</h4>
                        <p>
                            Contribuir a la justicia digital, proteger a ciudadanos de delitos cibernéticos 
                            y fortalecer la capacidad investigativa del Estado en el ámbito tecnológico.
                        </p>
                    </div>
                </div>

                <div class="meta-secundaria">
                    <div class="meta-badge secundaria">Meta Personal</div>
                    <h3 class="meta-titulo"> Proyecto Musical Colaborativo</h3>
                    <p class="meta-descripcion">
                        Formar o unirme a una banda musical donde pueda desarrollar mi creatividad, 
                        componer música y colaborar con otros artistas. Este proyecto representa mi 
                        lado artístico y mi pasión por la expresión musical.
                    </p>
                    
                    <div class="submetas">
                        <h4>Visión del proyecto:</h4>
                        <ul class="lista-vision">
                            <li> Producción musical con FL Studio</li>
                            <li> Composición de temas originales</li>
                            <li> Colaboración con otros músicos</li>
                            <li> Presentaciones en vivo</li>
                            <li> Grabación y distribución de música</li>
                        </ul>
                    </div>

                    <div class="balance">
                        <p>
                            <strong>Balance vida-trabajo:</strong> Este proyecto musical me permitirá mantener 
                            un equilibrio saludable entre mi carrera profesional en tecnología y mis pasiones 
                            creativas, enriqueciendo ambos aspectos de mi vida.
                        </p>
                    </div>
                </div>
            </div>

            <div class="vision-futura">
                <h3> Visión a Largo Plazo</h3>
                <p>
                    En el futuro, me veo como una profesional en informática forense que contribuye 
                    significativamente a la seguridad digital del país, mientras mantengo activa mi 
                    pasión por la música y el arte. Aspiro a ser un ejemplo de que la tecnología y 
                    la creatividad pueden coexistir y complementarse mutuamente.
                </p>
                <p>
                    Mi objetivo final es encontrar la intersección perfecta entre mi trabajo en 
                    ciberseguridad, mi expresión artística.
                </p>
            </div>
        </section>
    </main>

    <footer class="pie-pagina">
        <p>&copy; 2026 Abigail Vargas Argüello - Portafolio Personal</p>
    </footer>
</body>
</html>