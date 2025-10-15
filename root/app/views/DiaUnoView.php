<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "Dia 1 - Resumen";
include '../public/static/blocks/head.php';
?>

<body class="">

    <div class="drawer drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            <?php include '../public/static/blocks/navbar.php'; ?>

            <div class="max-w-7xl mx-auto px-4 py-8">
                <h1 class="text-5xl font-bold text-center my-8 bg-gradient-to-r from-orange-500 to-yellow-500 bg-clip-text text-transparent">
                    Día 1 - Bitcoin e Inteligencia Artificial
                </h1>

                <!-- Resumen de la charla Bitcoin -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">ABC del Bitcoin</h2>
                        
                        <!-- Historia del Dinero Fiat -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-orange-500">
                                Historia del Dólar y Dinero Fiat
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                La sesión abordó la evolución histórica del dólar estadounidense, con especial énfasis en el momento 
                                crucial cuando la Reserva Federal solicitó a los ciudadanos entregar sus reservas de oro al Estado. 
                                Este hito marcó la transición definitiva hacia el <span class="font-semibold text-warning">dinero fiat</span>, 
                                una forma de moneda cuyo valor se fundamenta exclusivamente en la confianza institucional y el respaldo 
                                gubernamental, prescindiendo por completo de activos físicos tangibles como metales preciosos. 
                                A diferencia de los sistemas monetarios respaldados por oro o plata, el dinero fiat depende enteramente 
                                de la autoridad emisora y su capacidad para regular la masa monetaria.
                            </p>
                        </div>

                        <!-- Bitcoin vs Dólar -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-orange-500">
                                Comparativa Bitcoin vs Dólar
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se realizó un análisis comparativo exhaustivo entre Bitcoin y el dólar tradicional, examinando 
                                las diferencias estructurales en múltiples dimensiones:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li>
                                    <span class="font-semibold">Mecanismos de interés:</span> Funcionamiento de los rendimientos 
                                    y sistemas de incentivos en cada ecosistema monetario
                                </li>
                                <li>
                                    <span class="font-semibold">Infraestructura de pagos:</span> Metodologías de transferencia, 
                                    velocidad de liquidación y costos asociados a las transacciones
                                </li>
                                <li>
                                    <span class="font-semibold">Trazabilidad y transparencia:</span> Las operaciones con Bitcoin 
                                    quedan registradas permanentemente en la blockchain, generando un historial público, verificable 
                                    e inalterable de todas las transacciones realizadas
                                </li>
                                <li>
                                    <span class="font-semibold">Modalidades transaccionales:</span> Se exploraron alternativas como 
                                    Lightning Network, una solución de segunda capa que facilita pagos instantáneos con comisiones mínimas
                                </li>
                            </ul>
                        </div>

                        <!-- Escuela Austriaca -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-orange-500">
                                Escuela Austriaca de Economía
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                Se presentaron los fundamentos de la <span class="font-semibold text-info">Escuela Austriaca de Economía</span>, 
                                corriente de pensamiento económico que defiende los principios del libre mercado, la propiedad privada 
                                y la mínima intervención estatal en los procesos económicos. Esta filosofía constituye el sustrato 
                                teórico que inspira los principios fundamentales de Bitcoin y el movimiento de las criptomonedas 
                                descentralizadas, enfatizando la soberanía individual sobre los activos financieros.
                            </p>
                        </div>

                        <!-- Tipos de Wallets -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-orange-500">
                                Tipos de Wallets de Bitcoin
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se detallaron las distintas categorías de carteras para el almacenamiento seguro de Bitcoin, 
                                cada una con características específicas según el perfil de uso:
                            </p>
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-info">Wallets Frías (Cold Wallets)</h4>
                                        <p class="text-sm leading-relaxed">
                                            Dispositivos de almacenamiento completamente offline que proporcionan el máximo nivel 
                                            de seguridad. Recomendadas para resguardar cantidades significativas de criptomonedas 
                                            con perspectiva de largo plazo, minimizando la exposición a ataques remotos.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-error">Wallets Calientes (Hot Wallets)</h4>
                                        <p class="text-sm leading-relaxed">
                                            Carteras conectadas a internet que priorizan la conveniencia y rapidez de acceso. 
                                            Ideales para transacciones frecuentes y gestión de montos reducidos, aceptando 
                                            un mayor nivel de riesgo a cambio de inmediatez operativa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda Charla: IA Generativa -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">
                            Inteligencia Artificial Generativa - De la Idea a la Acción
                        </h2>
                        
                        <!-- Machine Learning -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Fundamentos de Machine Learning
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                La ponencia introdujo los conceptos esenciales del aprendizaje automático, diferenciando 
                                entre los dos paradigmas principales de entrenamiento de modelos:
                            </p>
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-success">Aprendizaje Supervisado</h4>
                                        <p class="text-sm leading-relaxed">
                                            Metodología en la que el algoritmo se entrena utilizando conjuntos de datos previamente 
                                            etiquetados o clasificados. Este enfoque permite al modelo generar predicciones precisas 
                                            basándose en patrones identificados en ejemplos conocidos, siendo fundamental para tareas 
                                            de clasificación y regresión.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-warning">Aprendizaje No Supervisado</h4>
                                        <p class="text-sm leading-relaxed">
                                            Técnica donde el modelo explora datos sin etiquetas previas, identificando 
                                            automáticamente estructuras, agrupaciones y relaciones subyacentes. Este paradigma 
                                            resulta esencial para descubrir insights ocultos en información no categorizada.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>
                                    <span class="font-semibold">Redes Generativas Adversarias (GAN):</span> Se explicó el rol 
                                    del discriminador en un proceso de competencia controlada, donde este componente evalúa y 
                                    colabora con el generador para optimizar progresivamente la calidad de los outputs sintéticos.
                                </span>
                            </div>
                        </div>

                        <!-- Automatización con n8n -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Automatización de Procesos con n8n
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                <span class="font-semibold text-accent">n8n</span> es una plataforma open-source de automatización 
                                de flujos de trabajo que posibilita la integración de múltiples aplicaciones y servicios mediante 
                                interfaces visuales, sin requerir conocimientos de programación. Comparable a soluciones como Zapier 
                                o Make, pero con la ventaja de ser auto-hospedable y de código abierto.
                            </p>
                            <div class="bg-base-300 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg mb-2">
                                    Caso Práctico Demostrado
                                </h4>
                                <p class="text-base-content/80 mb-2">
                                    Se presentó una implementación funcional que integraba los siguientes componentes:
                                </p>
                                <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                    <li>
                                        <span class="font-semibold">Google Calendar:</span> Actuando como repositorio principal 
                                        de eventos programados
                                    </li>
                                    <li>
                                        <span class="font-semibold">API intermediaria:</span> Gestionando el procesamiento y 
                                        transformación de datos entre servicios
                                    </li>
                                    <li>
                                        <span class="font-semibold">Sistema de mensajería:</span> Habilitando consultas mediante 
                                        comandos de texto natural
                                    </li>
                                </ul>
                                <div class="mt-3 p-3 bg-base-100 rounded border-l-4 border-purple-500">
                                    <p class="text-sm italic text-base-content/80">
                                        La solución permitía a los usuarios consultar vía mensaje de texto los eventos agendados 
                                        para fechas específicas, recibiendo respuestas automáticas con la información extraída 
                                        directamente de Google Calendar, demostrando la eficacia de los workflows sin código.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ingeniería de Contexto -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-purple-500">
                                Ingeniería de Prompts (Prompt Engineering)
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se destacó la relevancia crítica de la <span class="font-semibold text-primary">ingeniería de contexto</span> 
                                como disciplina esencial para maximizar la efectividad de las interacciones con sistemas de inteligencia artificial.
                            </p>
                            <div class="alert alert-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                <div>
                                    <h4 class="font-bold">Importancia del Conocimiento de Dominio</h4>
                                    <p class="text-sm">
                                        La construcción de prompts efectivos requiere competencia sustancial en el área temática específica. 
                                        El criterio experto y la experiencia en un dominio particular constituyen factores determinantes 
                                        para elevar la precisión, relevancia y utilidad práctica de los resultados generados por sistemas 
                                        de IA, transformando interacciones genéricas en soluciones especializadas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Galería de imágenes -->
                <h2 class="text-3xl font-bold text-center mb-6">Galería del Evento</h2>
                
                <?php 
                //optimizacion de clases repetidas
                $imgClass = "w-0 flex-1 object-cover opacity-80 transition-all duration-500 ease-in-out hover:cursor-pointer hover:w-[350px] hover:opacity-100 hover:contrast-125 hover:scale-105 rounded-sm";
                
                //array con las rutas de imagenes para no repetir tanto codigo
                $imagenes = [
                    "D1-1.jpeg",
                    "D1-4.jpeg", 
                    "D1-8.jpg",
                    "D1-5.jpeg",
                    "D1-7.jpeg"
                ];
                ?>
                
                <section class="flex w-full max-w-[1200px] h-[700px] mx-auto gap-2 px-4 mb-8">
                    <?php foreach($imagenes as $img): ?>
                        <img class="<?= $imgClass ?>" src="../public/static/images/<?= $img ?>" alt="Imagen dia 1">
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