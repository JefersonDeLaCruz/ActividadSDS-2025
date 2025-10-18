<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "SDS 2025 - Semana de Desarrollo de Software";
include '../public/static/blocks/head.php';
?>

<body class="">

    <div class="drawer drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            <?php include '../public/static/blocks/navbar.php'; ?>

            <br>
            <br>
            <br>

            <div class="max-w-7xl mx-auto px-4 py-8">
                
                <!-- Hero Section con Logo -->
                <div class="hero min-h-[60vh] bg-base-200 rounded-lg mb-8">
                    <div class="hero-content text-center">
                        <div class="max-w-4xl">
                            <div class="flex justify-center mb-6">
                                <img src="../public/static/images/sds25.png" alt="Logo SDS 2025" class="w-64 h-64 object-contain drop-shadow-2xl animate-pulse">
                            </div>
                            <h1 class="text-6xl font-bold mb-4 bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 bg-clip-text text-transparent">
                                Semana de Desarrollo de Software 2025
                            </h1>
                            <p class="text-xl text-base-content/80 leading-relaxed mb-6">
                                Una celebración de la innovación, tecnología y comunidad en Ingeniería de Sistemas Informáticos
                            </p>
                            <div class="badge badge-lg badge-primary">SDS25</div>
                            <div class="badge badge-lg badge-secondary ml-2">Octubre 2025</div>
                        </div>
                    </div>
                </div>

                <!-- Descripción General -->
                <div class="card bg-gradient-to-br from-primary/10 to-secondary/10 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-8 h-8 stroke-current text-primary">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            ¿Qué es la SDS25?
                        </h2>
                        <p class="text-base-content/80 leading-relaxed text-lg">
                            La <span class="font-bold text-primary">Semana de Desarrollo de Software 2025</span> es un evento anual 
                            que reúne a estudiantes, docentes e ingenieros de la carrera de Ingeniería de Sistemas Informáticos en 
                            una celebración de conocimiento, innovación y camaradería. A lo largo de cinco días, la comunidad académica 
                            participa en conferencias magistrales, talleres prácticos, ferias de proyectos, competencias deportivas y 
                            actividades recreativas que fortalecen el aprendizaje técnico y las relaciones interpersonales.
                        </p>
                    </div>
                </div>

                <!-- Stats Overview -->
                <div class="stats stats-vertical lg:stats-horizontal shadow w-full mb-8">
                    <div class="stat bg-primary/20">
                        <div class="stat-figure text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div class="stat-title">Duración del Evento</div>
                        <div class="stat-value text-primary">5 Días</div>
                        <div class="stat-desc">De actividades continuas</div>
                    </div>
                    
                    <div class="stat bg-secondary/20">
                        <div class="stat-figure text-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="stat-title">Participantes</div>
                        <div class="stat-value text-secondary">200+</div>
                        <div class="stat-desc">Estudiantes e ingenieros</div>
                    </div>
                    
                    <div class="stat bg-accent/20">
                        <div class="stat-figure text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <div class="stat-title">Actividades</div>
                        <div class="stat-value text-accent">10+</div>
                        <div class="stat-desc">Eventos diversos</div>
                    </div>
                </div>

                <!-- Título de Cards de Días -->
                <div class="text-center my-8">
                    <h2 class="text-4xl font-bold mb-2 bg-gradient-to-r from-green-500 to-blue-500 bg-clip-text text-transparent">
                        Explora Cada Día de la SDS25
                    </h2>
                    <p class="text-base-content/60">Haz clic en cualquier tarjeta para ver los detalles completos</p>
                </div>

                <!-- Cards de los Días -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                    
                    <!-- Día 1 -->
                    <a href="/DiaUno" class="card bg-base-200 shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-transparent hover:border-primary">
                        <figure class="px-10 pt-10">
                            <div class="rounded-full bg-primary/20 p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-16 h-16 stroke-primary">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                </svg>
                            </div>
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title text-2xl text-primary">Día 1</h2>
                            <div class="badge badge-primary badge-outline">Conferencias</div>
                            <p class="text-sm text-base-content/70">
                                <strong>ABC del Bitcoin</strong> explorando dinero fiat, criptomonedas y wallets, seguido de 
                                <strong>IA Generativa</strong> con machine learning, automatización con n8n y prompt engineering.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-sm">Ver Detalles →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 2 -->
                    <a href="/DiaDos" class="card bg-base-200 shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-transparent hover:border-secondary">
                        <figure class="px-10 pt-10">
                            <div class="rounded-full bg-secondary/20 p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-16 h-16 stroke-secondary">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title text-2xl text-secondary">Día 2</h2>
                            <div class="badge badge-secondary badge-outline">Datos & Desarrollo</div>
                            <p class="text-sm text-base-content/70">
                                <strong>De Datos a Información</strong> con tablas dinámicas y Power BI, seguido de 
                                <strong>desarrollo ágil de CRUD</strong> con Laravel y Filament.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-secondary btn-sm">Ver Detalles →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 3 -->
                    <a href="/DiaTres" class="card bg-base-200 shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-transparent hover:border-warning">
                        <figure class="px-10 pt-10">
                            <div class="rounded-full bg-warning/20 p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-16 h-16 stroke-warning">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title text-2xl text-warning">Día 3</h2>
                            <div class="badge badge-warning badge-outline">Suspendido</div>
                            <p class="text-sm text-base-content/70">
                                Actividades <strong>suspendidas por fuertes lluvias</strong> en la zona. La seguridad de 
                                la comunidad fue prioridad institucional.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-warning btn-sm">Ver Detalles →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 4 -->
                    <a href="/DiaCuatro" class="card bg-base-200 shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-transparent hover:border-success">
                        <figure class="px-10 pt-10">
                            <div class="rounded-full bg-success/20 p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-16 h-16 stroke-success">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title text-2xl text-success">Día 4</h2>
                            <div class="badge badge-success badge-outline">Feria & Gastronomía</div>
                            <p class="text-sm text-base-content/70">
                                <strong>Feria de Logros</strong> con proyectos estudiantiles innovadores y 
                                <strong>competencia de pupusas</strong> que celebró la cultura local.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-success btn-sm">Ver Detalles →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Día 5 -->
                    <a href="/DiaCinco" class="card bg-base-200 shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 border-2 border-transparent hover:border-accent">
                        <figure class="px-10 pt-10">
                            <div class="rounded-full bg-accent/20 p-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-16 h-16 stroke-accent">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title text-2xl text-accent">Día 5</h2>
                            <div class="badge badge-accent badge-outline">Competencias</div>
                            <p class="text-sm text-base-content/70">
                                <strong>Bingo Digital</strong> desarrollado con Express.js y WebSockets, seguido de 
                                un emocionante <strong>torneo de Clash Royale</strong>.
                            </p>
                            <div class="card-actions">
                                <button class="btn btn-accent btn-sm">Ver Detalles →</button>
                            </div>
                        </div>
                    </a>

                    <!-- Card especial de resumen -->
                    <div class="card bg-gradient-to-br from-purple-500/20 to-pink-500/20 shadow-xl border-2 border-purple-500/50">
                        <div class="card-body items-center text-center">
                            <div class="badge badge-lg badge-primary mb-2">Evento Completo</div>
                            <h2 class="card-title text-xl">5 Días de Innovación</h2>
                            <p class="text-sm text-base-content/70">
                                Conferencias magistrales, talleres técnicos, competencias deportivas, 
                                ferias de proyectos y actividades recreativas que fortalecen la comunidad académica.
                            </p>
                            <div class="flex gap-2 flex-wrap justify-center mt-2">
                                <div class="badge badge-sm badge-outline">Tecnología</div>
                                <div class="badge badge-sm badge-outline">Deportes</div>
                                <div class="badge badge-sm badge-outline">Gaming</div>
                                <div class="badge badge-sm badge-outline">Proyectos</div>
                                <div class="badge badge-sm badge-outline">Talleres</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sección de Destacados -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-8 h-8 stroke-current text-warning">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                            </svg>
                            Momentos Destacados
                        </h2>
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h3 class="font-bold text-primary">🎯 Ingeniería de Prompt con IA</h3>
                                    <p class="text-sm">Conferencia magistral sobre el futuro de la inteligencia artificial</p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h3 class="font-bold text-secondary">💻 Bingo Digital</h3>
                                    <p class="text-sm">Proyecto estudiantil con Express.js y WebSockets en tiempo real</p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h3 class="font-bold text-success">🏆 Feria de Logros</h3>
                                    <p class="text-sm">Exhibición de proyectos innovadores de todos los años</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="alert alert-info shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="font-bold">Explora cada día de la SDS25</h3>
                        <div class="text-xs">Haz clic en las tarjetas superiores para conocer los detalles completos de cada jornada</div>
                    </div>
                </div>

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