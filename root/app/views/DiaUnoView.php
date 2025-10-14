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
                    Día 1 - ABC del Bitcoin
                </h1>

                <!-- Resumen de la charla -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">Resumen de la Charla</h2>
                        
                        <!-- Historia del Dinero Fiat -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-orange-500">💵</span> Historia del Dólar y Dinero Fiat
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                Se exploró la historia del dólar estadounidense, destacando el momento en que el Banco de Reserva Federal 
                                solicitó a la población entregar todo su oro al gobierno. Este evento marcó la transición hacia el 
                                <span class="font-semibold text-warning">dinero fiat</span>, un tipo de moneda respaldada únicamente por decreto gubernamental, 
                                sin respaldo físico como el oro. A diferencia del dinero respaldado por metales preciosos, el dinero fiat 
                                depende de la confianza en el gobierno emisor y su poder de imprimir más moneda.
                            </p>
                        </div>

                        <!-- Bitcoin vs Dólar -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-orange-500">₿</span> Bitcoin vs Dólar
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se analizaron las diferencias fundamentales entre Bitcoin y el dólar en aspectos clave:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li><span class="font-semibold">Intereses:</span> Cómo funcionan los rendimientos en cada sistema monetario</li>
                                <li><span class="font-semibold">Pagos:</span> Métodos y velocidad de las transacciones</li>
                                <li><span class="font-semibold">Trazabilidad:</span> Las transacciones con Bitcoin son rastreables gracias a la tecnología blockchain, 
                                    creando un registro público e inmutable de todas las operaciones</li>
                                <li><span class="font-semibold">Tipos de transacciones:</span> Se discutieron diferentes métodos como Lightning Network 
                                    para transacciones más rápidas y económicas</li>
                            </ul>
                        </div>

                        <!-- Escuela Austriaca -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-orange-500">📚</span> Escuela Austriaca de Economía
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                Se introdujo la <span class="font-semibold text-info">filosofía del Colegio Austriaco de Economía</span>, 
                                una corriente de pensamiento económico que enfatiza la importancia del libre mercado, la propiedad privada 
                                y critica la intervención gubernamental en la economía. Esta escuela de pensamiento es fundamental para 
                                entender los principios filosóficos detrás de Bitcoin y las criptomonedas.
                            </p>
                        </div>

                        <!-- Tipos de Wallets -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-orange-500">🔐</span> Tipos de Wallets de Bitcoin
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se explicaron los diferentes tipos de carteras para almacenar Bitcoin:
                            </p>
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-info">❄️ Wallets Frías (Cold Wallets)</h4>
                                        <p class="text-sm">Almacenamiento offline, máxima seguridad. Ideales para guardar grandes cantidades a largo plazo.</p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-error">🔥 Wallets Calientes (Hot Wallets)</h4>
                                        <p class="text-sm">Conectadas a internet, mayor conveniencia. Perfectas para transacciones frecuentes y montos pequeños.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda Charla: IA Generativa -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4 flex items-center gap-2">
                            <span class="text-purple-500">🤖</span> Inteligencia Artificial Generativa - De la Idea a la Acción
                        </h2>
                        
                        <!-- Machine Learning -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-purple-500">🧠</span> Fundamentos de Machine Learning
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se introdujeron conceptos básicos del aprendizaje automático, destacando dos enfoques principales:
                            </p>
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-success">🏷️ Aprendizaje Supervisado (Etiquetado)</h4>
                                        <p class="text-sm">El modelo aprende a partir de datos previamente clasificados o etiquetados, 
                                        permitiendo hacer predicciones basadas en ejemplos conocidos.</p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-warning">🔍 Aprendizaje No Supervisado</h4>
                                        <p class="text-sm">El modelo descubre patrones y relaciones por sí mismo en datos sin etiquetar, 
                                        identificando estructuras ocultas en la información.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-info mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span><span class="font-semibold">El Discriminador:</span> Se mencionó su función en un proceso antagónico, 
                                donde trabaja en conjunto con el generador para mejorar la calidad de los resultados producidos por la IA.</span>
                            </div>
                        </div>

                        <!-- Automatización con n8n -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-purple-500">⚙️</span> Automatización con n8n
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                <span class="font-semibold text-accent">n8n</span> es una plataforma de automatización de flujos de trabajo 
                                que permite conectar diferentes aplicaciones y servicios sin necesidad de programar. Es similar a herramientas 
                                como Zapier o Make, pero de código abierto y auto-hospedable.
                            </p>
                            <div class="bg-base-300 p-4 rounded-lg">
                                <h4 class="font-semibold text-lg mb-2 flex items-center gap-2">
                                    <span>📅</span> Ejemplo Práctico Demostrado:
                                </h4>
                                <p class="text-base-content/80 mb-2">
                                    Se presentó una automatización que integraba:
                                </p>
                                <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                    <li><span class="font-semibold">Google Calendar:</span> Como fuente de datos de eventos</li>
                                    <li><span class="font-semibold">Una API:</span> Para procesar y manejar la información</li>
                                    <li><span class="font-semibold">Trigger de mensajes de texto:</span> Para activar consultas</li>
                                </ul>
                                <div class="mt-3 p-3 bg-base-100 rounded border-l-4 border-purple-500">
                                    <p class="text-sm italic">
                                        "El sistema permitía consultar mediante texto qué eventos estaban agendados para un día específico, 
                                        y respondía automáticamente con la información correcta extraída de Google Calendar."
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Ingeniería de Contexto -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 flex items-center gap-2">
                                <span class="text-purple-500">💡</span> Ingeniería de Contexto (Prompt Engineering)
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se enfatizó la importancia de la <span class="font-semibold text-primary">ingeniería de contexto</span> 
                                para obtener mejores resultados al interactuar con sistemas de IA.
                            </p>
                            <div class="alert alert-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                <div>
                                    <h4 class="font-bold">La Importancia del Criterio</h4>
                                    <p class="text-sm">Para crear prompts efectivos, es fundamental tener conocimientos sólidos sobre el tema. 
                                    El criterio y la experiencia en un área específica son clave para mejorar la calidad de las interacciones 
                                    con la IA y obtener resultados más precisos y útiles.</p>
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