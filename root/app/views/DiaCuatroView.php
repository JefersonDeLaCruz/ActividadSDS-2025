<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "Día 4 - Feria de Logros y Actividades";
include '../public/static/blocks/head.php';
?>

<body class="">

    <div class="drawer drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            <?php include '../public/static/blocks/navbar.php'; ?>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <h1 class="text-5xl font-bold text-center my-8 bg-gradient-to-r from-green-500 to-emerald-500 bg-clip-text text-transparent">
                    Día 4 - Feria de Logros y Competencia de Pupusas
                </h1>

                <!-- Primera actividad: Feria de Logros -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">Feria de Logros - Ingeniería de Sistemas Informáticos</h2>
                        
                        <!-- Descripción general -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-green-500">
                                Presentación de Proyectos Estudiantiles
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                La cuarta jornada inició con la <span class="font-semibold text-success">Feria de Logros</span> 
                                de la carrera de Ingeniería de Sistemas Informáticos, un espacio dedicado a la exhibición 
                                de proyectos desarrollados por estudiantes a lo largo de su formación académica. Este evento 
                                permitió apreciar la aplicación práctica de conocimientos técnicos en soluciones innovadoras 
                                que abarcan diversas áreas del desarrollo de software, desde aplicaciones de gestión hasta 
                                implementaciones lúdicas y sistemas interactivos.
                            </p>
                        </div>

                        <!-- Proyectos destacados -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-green-500">
                                Proyectos Destacados
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Entre las múltiples propuestas presentadas, sobresalieron diversos proyectos que demostraron 
                                creatividad técnica y capacidad de resolución de problemas:
                            </p>
                            
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-primary">Sistema de Bingo Digital</h4>
                                        <p class="text-sm leading-relaxed">
                                            Implementación digital del juego de bingo tradicional, incorporando mecánicas 
                                            automatizadas de sorteo, validación de cartones ganadores y gestión de partidas 
                                            múltiples. El proyecto demostró habilidades en desarrollo de lógica de juego y 
                                            manejo de eventos en tiempo real.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-info">Sistema de Gestión de Citas</h4>
                                        <p class="text-sm leading-relaxed">
                                            Plataforma administrativa para la coordinación y gestión de citas, 
                                            incluyendo registro de usuarios, agendamiento de encuentros, recordatorios 
                                            automatizados y generación de reportes. Destacó por su enfoque en usabilidad 
                                            y flujos de trabajo optimizados.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-accent">Plants vs Zombies - Clon</h4>
                                        <p class="text-sm leading-relaxed">
                                            Recreación del popular videojuego de estrategia tower defense, implementando 
                                            mecánicas de juego, inteligencia artificial básica para enemigos, sistema de 
                                            recursos y múltiples niveles. Evidenció competencias en desarrollo de juegos 
                                            y programación orientada a objetos.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-warning">Otros Proyectos Innovadores</h4>
                                        <p class="text-sm leading-relaxed">
                                            Además de los mencionados, se presentaron numerosas propuestas adicionales 
                                            abarcando áreas como e-commerce, sistemas de inventario, aplicaciones móviles, 
                                            plataformas educativas y herramientas de productividad, reflejando la diversidad 
                                            de intereses y especializaciones del alumnado.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Impacto y aprendizaje -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-green-500">
                                Valor Académico y Profesional
                            </h3>
                            <div class="alert alert-success">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div>
                                    <h4 class="font-bold">Experiencia Práctica</h4>
                                    <p class="text-sm">
                                        La Feria de Logros representa una oportunidad invaluable para que los estudiantes 
                                        exhiban sus competencias técnicas, reciban retroalimentación de pares y docentes, 
                                        y desarrollen habilidades de presentación profesional. Este tipo de eventos fortalece 
                                        el vínculo entre la teoría académica y la práctica profesional, preparando a los 
                                        futuros ingenieros para los desafíos del mercado laboral.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galería de imágenes - Feria de Logros -->
                <h2 class="text-3xl font-bold text-center mb-6">Galería - Feria de Logros</h2>
                
                <?php 
                // Optimización de clases repetidas
                $imgClass = "w-0 flex-1 object-cover opacity-80 transition-all duration-500 ease-in-out hover:cursor-pointer hover:w-[350px] hover:opacity-100 hover:contrast-125 hover:scale-105 rounded-sm";
                
                // Array con las rutas de imágenes de la Feria de Logros
                $imagenesFeria = [
                    "D4-2.jpg", 
                    "D4-3.jpg",
                    "D4-4.jpg",
                ];
                ?>
                
                <section class="flex w-full max-w-[1200px] h-[700px] mx-auto gap-2 px-4 mb-12">
                    <?php foreach($imagenesFeria as $img): ?>
                        <img class="<?= $imgClass ?>" src="../public/static/images/<?= $img ?>" alt="Feria de Logros día 4">
                    <?php endforeach; ?>
                </section>
                
                <br>
                <br>
                <br>
                <br>
                <!-- Segunda actividad: Comelona de Pupusas -->
                <div class="card bg-base-200 shadow-xl mb-8 mt-12">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">Competencia de Pupusas</h2>
                        
                        <!-- Descripción del evento -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-emerald-500">
                                Desafío Gastronómico
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                La segunda actividad del día consistió en una <span class="font-semibold text-error">competencia 
                                gastronómica de pupusas</span>, plato emblemático de la gastronomía salvadoreña. Este evento de 
                                carácter lúdico y recreativo convocó a participantes dispuestos a demostrar sus habilidades 
                                culinarias y capacidad competitiva en un ambiente festivo y de camaradería estudiantil.
                            </p>
                        </div>

                        <!-- Dinámica del evento -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-emerald-500">
                                Mecánica de Competencia
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                El desafío puso a prueba no solo la velocidad de consumo, sino también la resistencia y 
                                determinación de los competidores:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li>
                                    <span class="font-semibold">Formato de eliminación:</span> Los participantes compitieron 
                                    simultáneamente, consumiendo el mayor número de pupusas en el tiempo establecido
                                </li>
                                <li>
                                    <span class="font-semibold">Ambiente competitivo:</span> La audiencia animó activamente 
                                    a los concursantes, generando un entorno energético y entretenido
                                </li>
                                <li>
                                    <span class="font-semibold">Premio al ganador:</span> El primer lugar fue reconocido 
                                    por su destacado desempeño en esta singular competencia
                                </li>
                            </ul>
                        </div>

                        <!-- Aspectos sociales -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-emerald-500">
                                Valor Social y Recreativo
                            </h3>
                            <div class="bg-base-300 p-4 rounded-lg border-l-4 border-emerald-500">
                                <p class="text-base-content/80 text-sm leading-relaxed">
                                    Este tipo de actividades complementa la formación académica al fomentar la integración 
                                    social entre estudiantes, docentes y personal administrativo. Los eventos recreativos 
                                    fortalecen el sentido de comunidad, reducen el estrés académico y generan memorias 
                                    positivas que enriquecen la experiencia universitaria. La competencia de pupusas, además 
                                    de su componente lúdico, celebra elementos culturales locales y promueve la convivencia 
                                    en un contexto informal y distendido.
                                </p>
                            </div>
                        </div>

                        <!-- Destacados de la competencia -->
                        <div class="grid md:grid-cols-3 gap-4 mt-4">
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h4 class="card-title text-sm text-success">Participación Activa</h4>
                                    <p class="text-sm">
                                        Numerosos estudiantes se inscribieron para competir, demostrando entusiasmo 
                                        y espíritu deportivo.
                                    </p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h4 class="card-title text-sm text-warning">Apoyo del Público</h4>
                                    <p class="text-sm">
                                        La audiencia jugó un rol fundamental animando y creando un ambiente de fiesta 
                                        y celebración.
                                    </p>
                                </div>
                            </div>
                            <div class="card bg-base-300">
                                <div class="card-body">
                                    <h4 class="card-title text-sm text-error">Momento Memorable</h4>
                                    <p class="text-sm">
                                        El evento quedó registrado como uno de los momentos más divertidos y recordados 
                                        de la semana.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galería de imágenes - Comelona de Pupusas -->
                <h2 class="text-3xl font-bold text-center mb-6">Galería - Competencia de Pupusas</h2>
                
                <?php 
                // Array con las rutas de imágenes de la Comelona de Pupusas
                $imagenesPupusas = [
                    "D4-PUPA-1.jpg",
                    "D4-PUPA-2.jpg", 
                ];
                ?>
                
                <section class="flex w-full max-w-[1200px] h-[700px] mx-auto gap-2 px-4 mb-8">
                    <?php foreach($imagenesPupusas as $img): ?>
                        <img class="<?= $imgClass ?>" src="../public/static/images/<?= $img ?>" alt="Competencia de Pupusas día 4">
                    <?php endforeach; ?>
                </section>

                <!-- Imagen destacada -->
                <div class="w-full max-w-[1200px] mx-auto px-4 mb-8">
                    <img class="w-full h-auto object-contain rounded-lg shadow-xl" src="../public/static/images/D4-1.jpg" alt="Momento destacado de la competencia de pupusas">
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