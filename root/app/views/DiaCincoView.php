<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "Día 5 - Bingo Digital y Torneo de Clash Royale";
include '../public/static/blocks/head.php';
?>

<body class="">

    <div class="drawer drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            <?php include '../public/static/blocks/navbar.php'; ?>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <h1 class="text-5xl font-bold text-center my-8 bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent">
                    Día 5 - Bingo Digital y Torneo de Clash Royale
                </h1>

                <!-- Primera actividad: Bingo Digital -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">Bingo Digital - Proyecto Estudiantil</h2>
                        
                        <!-- Descripción general -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Implementación con Express.js y WebSockets
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                La jornada del quinto día inició con una actividad especial: un <span class="font-semibold text-success">Bingo Digital</span> 
                                desarrollado por un grupo de compañeros utilizando tecnologías web modernas. El proyecto, construido con 
                                <span class="font-semibold">Express.js</span> como framework backend y <span class="font-semibold">WebSockets</span> 
                                para comunicación en tiempo real, demostró la aplicación práctica de conocimientos adquiridos en el aula y 
                                la capacidad de crear experiencias interactivas multiplayer funcionales.
                            </p>
                        </div>

                        <!-- Aspectos técnicos -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Características Técnicas del Proyecto
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                El sistema de bingo implementado incorporó diversas funcionalidades técnicas que garantizaron 
                                una experiencia fluida y confiable para todos los participantes:
                            </p>
                            
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary">Backend con Express.js</h4>
                                        <p class="text-sm leading-relaxed">
                                            Servidor Node.js robusto que gestiona la lógica del juego, generación aleatoria 
                                            de números, validación de cartones ganadores y manejo de sesiones de múltiples 
                                            jugadores simultáneos.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-info">Comunicación en Tiempo Real</h4>
                                        <p class="text-sm leading-relaxed">
                                            Implementación de WebSockets que permite la sincronización instantánea de eventos 
                                            entre el servidor y todos los clientes conectados, actualizando cartones y 
                                            notificando sorteos sin recargar la página.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-accent">Sistema de Rondas</h4>
                                        <p class="text-sm leading-relaxed">
                                            Mecánica que permite ejecutar múltiples partidas consecutivas, cada una con 
                                            premios específicos, reiniciando cartones automáticamente.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-warning">Interfaz Interactiva</h4>
                                        <p class="text-sm leading-relaxed">
                                            Frontend intuitivo con actualización dinámica de cartones, visualización clara 
                                            de números sorteados, indicadores visuales de progreso y notificaciones de 
                                            estado del juego.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dinámica del evento -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Participación Masiva y Competencia
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                El evento convocó a una audiencia diversa que abarcó toda la comunidad académica:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li>
                                    <span class="font-semibold">Participación interdisciplinaria:</span> Estudiantes de todos 
                                    los años de la carrera se unieron a la actividad, desde primer año hasta los más avanzados
                                </li>
                                <li>
                                    <span class="font-semibold">Presencia docente:</span> Ingenieros y profesores participaron 
                                    activamente, compartiendo el espacio competitivo con los estudiantes en un ambiente de 
                                    camaradería y diversión
                                </li>
                                <li>
                                    <span class="font-semibold">Duración extendida:</span> La actividad se desarrolló durante 
                                    toda la mañana, con múltiples rondas consecutivas que mantuvieron el interés y la emoción 
                                    de los participantes
                                </li>
                                <li>
                                    <span class="font-semibold">Sistema de premios:</span> Cada ronda ofreció diferentes 
                                    incentivos, motivando la participación continua y generando expectativa en cada sorteo
                                </li>
                            </ul>
                        </div>

                        <!-- Valor educativo -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Aprendizaje Aplicado y Demostración de Competencias
                            </h3>
                            <div class="alert alert-success">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <h4 class="font-bold">Proyecto Real con Impacto Social</h4>
                                    <p class="text-sm">
                                        Este proyecto ejemplifica la convergencia entre teoría académica y aplicación práctica. 
                                        Los desarrolladores demostraron dominio de tecnologías modernas de desarrollo web, 
                                        arquitectura cliente-servidor, programación asíncrona y diseño de experiencias de usuario. 
                                        Más allá del componente técnico, lograron crear una herramienta que generó integración 
                                        social, entretenimiento y participación activa de toda la comunidad académica, evidenciando 
                                        que la tecnología puede ser vehículo de convivencia y recreación.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galería de imágenes - Bingo Digital -->
                <h2 class="text-3xl font-bold text-center mb-6">Galería - Bingo Digital</h2>
                
                <?php 
                // Optimización de clases repetidas
                $imgClass = "w-0 flex-1 object-cover opacity-80 transition-all duration-500 ease-in-out hover:cursor-pointer hover:w-[350px] hover:opacity-100 hover:contrast-125 hover:scale-105 rounded-sm";
                
                // Array con las rutas de imágenes del Bingo Digital
                $imagenesBingo = [
                    "D5-1.jpg", 
                ];
                ?>


                <div class="w-full max-w-[1200px] mx-auto px-4 mb-8">
                    <img class="w-full h-auto object-contain rounded-lg shadow-xl" src="../public/static/images/D5-PANORAMICA.jpg" alt="Momento destacado de la competencia de pupusas">
                </div>
                
                <section class="flex w-full max-w-[1200px] h-[700px] mx-auto gap-2 px-4 mb-12">
                    <?php foreach($imagenesBingo as $img): ?>
                        <img class="<?= $imgClass ?>" src="../public/static/images/<?= $img ?>" alt="Bingo Digital día 5">
                    <?php endforeach; ?>
                </section>
                
                <br>
                <br>
                <br>
                <br>

                <!-- Segunda actividad: Torneo de Clash Royale -->
                <div class="card bg-base-200 shadow-xl mb-8 mt-12">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">Torneo de Clash Royale</h2>
                        
                        <!-- Descripción del evento -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-pink-500">
                                Competencia de e-Sports Universitaria
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                La segunda mitad del día dio paso a una actividad que combinó estrategia, reflexos y competencia 
                                digital: un <span class="font-semibold text-error">Torneo de Clash Royale</span>. Este popular 
                                videojuego de estrategia en tiempo real convocó a estudiantes aficionados al gaming competitivo, 
                                generando enfrentamientos emocionantes y demostraciones de habilidad táctica. El torneo representó 
                                una oportunidad para que los participantes exhibieran sus destrezas en toma de decisiones rápidas, 
                                gestión de recursos y adaptación a estrategias adversarias.
                            </p>
                        </div>

                        <!-- Mecánica del torneo -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-pink-500">
                                Formato y Desarrollo del Torneo
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                El torneo fue estructurado para garantizar competencia justa y progresión emocionante:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li>
                                    <span class="font-semibold">Sistema de eliminación directa:</span> Los participantes compitieron 
                                    en duelos individuales, donde los ganadores avanzaban a rondas subsecuentes hasta determinar 
                                    al campeón final
                                </li>
                               
                            </ul>
                        </div>

                        <!-- Aspectos destacados -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-pink-500">
                                Valor del Gaming Competitivo
                            </h3>
                            <div class="bg-base-300 p-4 rounded-lg border-l-4 border-pink-500">
                                <p class="text-base-content/80 text-sm leading-relaxed">
                                    Los deportes electrónicos (e-sports) han emergido como disciplinas legítimas que desarrollan 
                                    habilidades transferibles al ámbito profesional: toma de decisiones bajo presión, pensamiento 
                                    estratégico, gestión de recursos limitados, adaptabilidad ante situaciones cambiantes y trabajo 
                                    en equipo. Este torneo permitió a estudiantes de ingeniería aplicar razonamiento lógico y 
                                    análisis táctico en un contexto recreativo, fortaleciendo además la cultura de comunidad y 
                                    sana competencia dentro de la carrera.
                                </p>
                            </div>
                        </div>

                        <!-- Tarjetas de aspectos destacados -->
                        <div class="grid md:grid-cols-3 gap-4 mt-4">
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h4 class="card-title text-sm text-success">Competencia Estratégica</h4>
                                    <p class="text-sm">
                                        Los participantes demostraron dominio avanzado del juego, empleando tácticas 
                                        sofisticadas y reaccionando dinámicamente a las jugadas de sus oponentes.
                                    </p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h4 class="card-title text-sm text-warning">Ambiente Deportivo</h4>
                                    <p class="text-sm">
                                        El torneo generó una atmósfera de competencia sana, respeto mutuo y camaradería, 
                                        con buenos modales y espíritu deportivo entre competidores.
                                    </p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h4 class="card-title text-sm text-error">Integración Digital</h4>
                                    <p class="text-sm">
                                        El evento consolidó la cultura gamer dentro de la comunidad estudiantil, 
                                        reconociendo el gaming como actividad recreativa válida y socialmente enriquecedora.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Momento destacado -->
                        <div class="mt-6">
                            <div class="alert alert-info">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <h4 class="font-bold">Cierre Memorable del Día Cinco</h4>
                                    <p class="text-sm">
                                        El torneo de Clash Royale cerró exitosamente la jornada del quinto día, complementando 
                                        perfectamente la experiencia técnica del Bingo Digital de la mañana. Ambas actividades 
                                        demostraron la versatilidad de las actividades de integración estudiantil, abarcando 
                                        desde proyectos de desarrollo colaborativo hasta competencias de habilidad individual, 
                                        consolidando un día completo de aprendizaje, tecnología y entretenimiento.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galería de imágenes - Torneo de Clash Royale -->
                <h2 class="text-3xl font-bold text-center mb-6">Galería - Torneo de Clash Royale</h2>
                
                <?php 
                // Array con las rutas de imágenes del Torneo de Clash Royale
                $imagenesClash = [
                    "D5-TORNEO.jpg",
                ];
                ?>
                
                <section class="flex w-full max-w-[1200px] h-[700px] mx-auto gap-2 px-4 mb-8">
                    <?php foreach($imagenesClash as $img): ?>
                        <img class="<?= $imgClass ?>" src="../public/static/images/<?= $img ?>" alt="Torneo de Clash Royale día 5">
                    <?php endforeach; ?>
                </section>

            </div>

        </div>

        <div class="drawer-side is-drawer-close:overflow-visible">
            <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="is-drawer-close:w-14 is-drawer-open:w-64 bg-base-200 flex flex-col items-start min-h-full">
                <!-- Sidebar content here -->



                <?php include '../public/static/blocks/sidebar.php'; ?>


            </div>
        </div>
    </div>
</body>

</html>