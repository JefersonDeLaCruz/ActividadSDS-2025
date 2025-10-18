<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "Día 3 - Actividades Suspendidas";
include '../public/static/blocks/head.php';
?>

<body class="">

    <div class="drawer drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            <?php include '../public/static/blocks/navbar.php'; ?>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <h1 class="text-5xl font-bold text-center my-8 bg-gradient-to-r from-blue-500 to-cyan-500 bg-clip-text text-transparent">
                    Día 3 - Actividades Suspendidas
                </h1>

                <!-- Anuncio de cancelación -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        
                        <!-- Alerta principal -->
                        <div class="alert alert-warning mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                            <div>
                                <h3 class="font-bold text-xl">Eventos Cancelados por Condiciones Climáticas Adversas</h3>
                                <p class="text-sm">Las actividades programadas para este día fueron suspendidas debido a condiciones meteorológicas desfavorables.</p>
                            </div>
                        </div>

                        <!-- Explicación detallada -->
                        <div class="mb-6">
                            <h2 class="text-3xl font-semibold mb-4 text-warning">
                                Suspensión de Actividades por Fuertes Lluvias
                            </h2>
                            <p class="text-base-content/80 leading-relaxed mb-4">
                                El tercer día de actividades de la <span class="font-semibold">Semana de Desarrollo de Software 2025</span> 
                                no pudo llevarse a cabo según lo planificado debido a <span class="font-semibold text-warning">fuertes lluvias 
                                registradas en la zona</span>. Las condiciones meteorológicas adversas generaron situaciones que imposibilitaron 
                                el desarrollo normal de las actividades académicas y recreativas programadas para esta jornada.
                            </p>
                            <p class="text-base-content/80 leading-relaxed">
                                La seguridad de estudiantes, docentes y personal administrativo es prioridad institucional, por lo que 
                                la decisión de suspender las actividades se tomó considerando los riesgos asociados a condiciones climáticas 
                                desfavorables, incluyendo dificultades de transporte, posibles inundaciones en áreas de acceso y limitaciones 
                                en la infraestructura para garantizar un ambiente seguro y adecuado para el desarrollo de eventos académicos.
                            </p>
                        </div>

                        <!-- Información de contexto -->
                        <div class="grid md:grid-cols-2 gap-4 mb-6">
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h3 class="card-title text-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                        </svg>
                                        Condiciones Climáticas
                                    </h3>
                                    <p class="text-sm leading-relaxed">
                                        Precipitaciones intensas afectaron la región durante la madrugada y primeras horas de la mañana, 
                                        generando acumulación de agua en vías de acceso y espacios comunes de la institución.
                                    </p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h3 class="card-title text-error">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-6 h-6 stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                        Impacto en Actividades
                                    </h3>
                                    <p class="text-sm leading-relaxed">
                                        Todas las actividades académicas, talleres, conferencias y eventos recreativos programados 
                                        para el día tres fueron oficialmente suspendidos para resguardar la seguridad de los participantes.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Medidas tomadas -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-cyan-500">
                                Decisiones Institucionales
                            </h3>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li>
                                    <span class="font-semibold">Suspensión total de actividades:</span> Se comunicó oficialmente 
                                    a través de canales institucionales la cancelación de todas las actividades del día
                                </li>
                                <li>
                                    <span class="font-semibold">Prioridad a la seguridad:</span> La decisión se fundamentó en 
                                    criterios de seguridad y bienestar de la comunidad universitaria
                                </li>
                                <li>
                                    <span class="font-semibold">Reprogramación considerada:</span> Las autoridades evaluaron 
                                    la posibilidad de reprogramar algunos eventos para fechas posteriores, según disponibilidad 
                                    y condiciones favorables
                                </li>
                                <li>
                                    <span class="font-semibold">Comunicación oportuna:</span> Se mantuvieron canales de información 
                                    abiertos para notificar a estudiantes y docentes sobre el estado de las actividades
                                </li>
                            </ul>
                        </div>

                        <!-- Mensaje institucional -->
                        <div class="alert alert-info">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div>
                                <h4 class="font-bold">Compromiso con la Continuidad</h4>
                                <p class="text-sm">
                                    A pesar de esta interrupción inevitable causada por factores climáticos fuera de control institucional, 
                                    el compromiso con la <span class="font-semibold">Semana de Desarrollo de Software</span> se mantuvo firme. 
                                    Las actividades programadas para los días subsecuentes continuaron según lo planificado, retomando el 
                                    calendario de eventos con normalidad una vez superadas las condiciones meteorológicas adversas. La 
                                    flexibilidad y capacidad de adaptación demostradas reflejan la resiliencia de la comunidad académica 
                                    ante circunstancias imprevistas.
                                </p>
                            </div>
                        </div>

                        <!-- Estadísticas del día -->
                        <div class="stats stats-vertical lg:stats-horizontal shadow mt-6 w-full">
                            <div class="stat">
                                <div class="stat-figure text-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                <div class="stat-title">Actividades Programadas</div>
                                <div class="stat-value text-error">Suspendidas</div>
                                <div class="stat-desc">Debido a lluvias intensas</div>
                            </div>
                            
                            <div class="stat">
                                <div class="stat-figure text-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                    </svg>
                                </div>
                                <div class="stat-title">Condición Meteorológica</div>
                                <div class="stat-value text-warning">Adversa</div>
                                <div class="stat-desc">Precipitaciones fuertes</div>
                            </div>
                            
                            <div class="stat">
                                <div class="stat-figure text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="stat-title">Seguridad Garantizada</div>
                                <div class="stat-value text-success">100%</div>
                                <div class="stat-desc">Prioridad institucional</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Nota final -->
                <div class="text-center mt-8 mb-8">
                    <div class="divider"></div>
                    <p class="text-base-content/60 italic">
                        Las actividades se reanudaron con normalidad en los días posteriores, continuando con el programa establecido 
                        para la Semana de Desarrollo de Software 2025.
                    </p>
                    <div class="divider"></div>
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