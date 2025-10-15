<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "Dia Dos";
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
                    Día 2 - Gestión de Datos y Desarrollo Ágil
                </h1>

                <!-- Primera charla: Datos e Información -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">De Datos a Información</h2>
                        
                        <!-- Conceptos básicos -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-blue-500">
                                Conceptos Fundamentales
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                Un <span class="font-semibold text-warning">dato</span> representa un registro elemental: 
                                puede ser un valor numérico, una cadena de texto, una fecha o cualquier medida aislada. 
                                Por sí mismo, este fragmento de información carece de contexto significativo. 
                                La transformación hacia <span class="font-semibold text-info">información</span> ocurre cuando 
                                estos elementos se procesan, estructuran y relacionan entre sí, adquiriendo relevancia para 
                                resolver problemas específicos, tomar decisiones fundamentadas o construir narrativas comprensibles.
                            </p>
                        </div>

                        <!-- Distinción dato vs información -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-blue-500">
                                Distinción entre Dato e Información
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                La frontera entre dato e información se define por tres elementos clave:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-base-content/80 ml-4">
                                <li><span class="font-semibold">Contexto:</span> El dato adquiere significado cuando se sitúa en un marco de referencia específico</li>
                                <li><span class="font-semibold">Estructura:</span> La organización sistemática de múltiples datos permite identificar patrones y tendencias</li>
                                <li><span class="font-semibold">Propósito:</span> El procesamiento dirigido hacia un objetivo convierte registros aislados en conocimiento útil</li>
                            </ul>
                        </div>

                        <!-- Herramientas de análisis -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-blue-500">
                                Análisis de Volúmenes de Datos
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                Se presentó el manejo de grandes conjuntos de datos mediante herramientas especializadas 
                                que facilitan la exploración, el análisis y la visualización de información compleja.
                            </p>
                            
                            <div class="grid md:grid-cols-2 gap-4 mt-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-success">Tablas Dinámicas en Excel</h4>
                                        <p class="text-sm leading-relaxed">
                                            Las tablas dinámicas permiten resumir, reorganizar y analizar grandes volúmenes 
                                            de datos de forma interactiva. Mediante operaciones de agrupación, filtrado y 
                                            agregación (sumas, promedios, conteos), es posible extraer patrones significativos 
                                            sin necesidad de fórmulas complejas. Esta funcionalidad resulta fundamental para 
                                            transformar datos crudos en reportes ejecutivos comprensibles.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-accent">Power BI para Inteligencia de Negocios</h4>
                                        <p class="text-sm leading-relaxed">
                                            Se mencionó <span class="font-semibold">Power BI</span> como plataforma avanzada 
                                            de visualización y análisis. Esta herramienta conecta múltiples fuentes de datos, 
                                            crea dashboards interactivos y genera reportes dinámicos que actualizan información 
                                            en tiempo real. Su capacidad para relacionar tablas y aplicar modelos de datos complejos 
                                            la convierte en un estándar para la toma de decisiones basada en datos a nivel empresarial.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-info mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>
                                    <span class="font-semibold">Ventaja clave:</span> Ambas herramientas permiten explorar 
                                    datos sin conocimientos profundos de programación, democratizando el acceso al análisis 
                                    de información en equipos multidisciplinarios.
                                </span>
                            </div>
                        </div>

                        <!-- Ejemplos prácticos -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-blue-500">
                                Ejemplos Ilustrativos
                            </h3>
                            <div class="bg-base-300 p-4 rounded-lg">
                                <ul class="space-y-3 text-base-content/80">
                                    <li>
                                        <span class="font-semibold text-warning">Dato aislado:</span> 
                                        "150", "maria@correo.com", "15/10/2025"
                                    </li>
                                    <li>
                                        <span class="font-semibold text-info">Información procesada:</span> 
                                        "Incremento del 150% en registros de usuarios durante octubre de 2025" o 
                                        "María completó su registro el 15 de octubre a las 14:30"
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Segunda Charla: Laravel + Filament -->
                <div class="card bg-base-200 shadow-xl mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4">
                            Desarrollo Ágil de CRUD con Laravel y Filament
                        </h2>
                        
                        <!-- Introducción -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-cyan-500">
                                Visión General
                            </h3>
                            <p class="text-base-content/80 leading-relaxed">
                                La segunda sesión exploró un enfoque optimizado para construir sistemas de gestión de datos 
                                (operaciones de Creación, Lectura, Actualización y Eliminación) combinando el framework 
                                <span class="font-semibold text-error">Laravel</span> con el panel administrativo 
                                <span class="font-semibold text-primary">Filament</span>. Esta combinación permite 
                                desarrollar interfaces funcionales para administración de contenido sin invertir tiempo 
                                en programar manualmente cada componente visual.
                            </p>
                        </div>

                        <!-- Proceso de implementación -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-cyan-500">
                                Flujo de Implementación
                            </h3>
                            <p class="text-base-content/80 leading-relaxed mb-3">
                                El desarrollo sigue una secuencia lógica que minimiza el esfuerzo repetitivo:
                            </p>
                            <ol class="list-decimal list-inside space-y-2 text-base-content/80 ml-4">
                                <li>
                                    <span class="font-semibold">Inicialización del proyecto:</span> Configurar el entorno 
                                    Laravel, establecer conexión con la base de datos y aplicar migraciones iniciales
                                </li>
                                <li>
                                    <span class="font-semibold">Modelado de datos:</span> Diseñar el esquema de tablas 
                                    mediante migraciones y definir modelos Eloquent que representen entidades del sistema
                                </li>
                                <li>
                                    <span class="font-semibold">Integración de Filament:</span> Instalar el paquete, 
                                    configurar proveedores de servicios y generar credenciales de acceso administrativo
                                </li>
                                <li>
                                    <span class="font-semibold">Generación de Resources:</span> Crear recursos Filament 
                                    que mapean automáticamente formularios y listados al modelo correspondiente
                                </li>
                                <li>
                                    <span class="font-semibold">Personalización avanzada:</span> Ajustar campos visibles, 
                                    aplicar reglas de validación y configurar filtros dinámicos
                                </li>
                                <li>
                                    <span class="font-semibold">Validación funcional:</span> Probar operaciones completas 
                                    de creación, edición, listado y eliminación desde la interfaz administrativa
                                </li>
                            </ol>
                        </div>

                        <!-- Características destacadas -->
                        <div class="mb-6">
                            <h3 class="text-2xl font-semibold mb-3 text-cyan-500">
                                Capacidades Destacadas
                            </h3>
                            <div class="grid md:grid-cols-2 gap-4">
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-sm text-success">Generación Automática</h4>
                                        <p class="text-sm">
                                            Filament construye formularios completos y tablas responsivas a partir de 
                                            la definición del modelo, reduciendo el código manual necesario.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-sm text-warning">Relaciones Eloquent</h4>
                                        <p class="text-sm">
                                            Gestiona automáticamente relaciones entre modelos (uno a muchos, muchos a muchos) 
                                            y presenta datos relacionados de forma intuitiva.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-sm text-info">Validaciones Integradas</h4>
                                        <p class="text-sm">
                                            Permite definir reglas de validación directamente en el Resource, 
                                            garantizando integridad de datos antes de persistir en la base.
                                        </p>
                                    </div>
                                </div>
                                <div class="card bg-base-300">
                                    <div class="card-body">
                                        <h4 class="card-title text-sm text-error">Acciones Personalizadas</h4>
                                        <p class="text-sm">
                                            Extiende funcionalidad mediante acciones custom, jobs en cola o procesos 
                                            complejos activados desde el panel administrativo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mejores prácticas -->
                        <div class="mb-4">
                            <h3 class="text-2xl font-semibold mb-3 text-cyan-500">
                                Recomendaciones de Implementación
                            </h3>
                            <div class="alert alert-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                                <div>
                                    <h4 class="font-bold">Buenas Prácticas</h4>
                                    <ul class="text-sm space-y-1 mt-2">
                                        <li>Utilizar migraciones versionadas para rastrear evolución del esquema de base de datos</li>
                                        <li>Implementar validaciones robustas para prevenir inconsistencias en los registros</li>
                                        <li>Configurar políticas de autorización para controlar acceso a operaciones sensibles</li>
                                        <li>Separar lógica de negocio compleja en servicios o jobs independientes del Resource</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Resultado -->
                        <div class="bg-base-300 p-4 rounded-lg border-l-4 border-cyan-500">
                            <h4 class="font-semibold text-lg mb-2">Resultado Final</h4>
                            <p class="text-base-content/80 text-sm">
                                Con esta metodología, se obtiene un panel administrativo completamente operativo en tiempo récord, 
                                permitiendo al equipo de desarrollo concentrarse en la lógica específica del dominio y en garantizar 
                                que los datos manejados se transformen en información valiosa para el negocio.
                            </p>
                        </div>
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