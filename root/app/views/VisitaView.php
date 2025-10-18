<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "Registro de Visitas - SDS 2025";
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
                
                <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="alert alert-success shadow-lg mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span><strong>Registro exitoso</strong> Tu visita ha sido registrada correctamente</span>
                    </div>
                <?php endif; ?>

                <?php if (isset($error) && $error): ?>
                    <div class="alert alert-error shadow-lg mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span><strong>Error:</strong> <?= $error ?></span>
                    </div>
                <?php endif; ?>

                <div class="card bg-base-200 shadow-lg mb-8">
                    <div class="card-body">
                        <h2 class="card-title text-3xl mb-4 text-center">Registra tu Visita</h2>
                        <p class="text-center text-base-content/70 mb-6">Completa el formulario para registrar tu participacion en el evento</p>
                        
                        <form action="./visitas/registrar" method="POST" class="space-y-4">
                            <div class="form-control">
                                <label class="label" for="nombre">
                                    <span class="label-text font-semibold">Nombre Completo</span>
                                </label>
                                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre completo" 
                                       class="input input-bordered w-full" required>
                            </div>
                            
                            <div class="form-control">
                                <label class="label" for="correo">
                                    <span class="label-text font-semibold">Correo Electronico</span>
                                </label>
                                <input type="email" id="correo" name="correo" placeholder="tu@correo.com" 
                                       class="input input-bordered w-full" required>
                            </div>
                            
                            <div class="form-control mt-6">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Registrar tu Visita
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card bg-base-200 shadow-lg">
                    <div class="card-body">
                        <h3 class="card-title text-2xl mb-4">Ultimas 10 Visitas Registradas</h3>
                        
                        <?php if (!empty($ultimasVisitas)): ?>
                            <div class="overflow-x-auto">
                                <table class="table table-zebra w-full">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Fecha de Registro</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ultimasVisitas as $index => $visita): ?>
                                            <tr>
                                                <th><?= $index + 1 ?></th>
                                                <td><?= htmlspecialchars($visita['nombre']) ?></td>
                                                <td><?= htmlspecialchars($visita['correo']) ?></td>
                                                <td><?= date('d/m/Y H:i', strtotime($visita['fecha_registro'])) ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current flex-shrink-0 w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Aun no hay visitas registradas, se el primero en registrarte</span>
                            </div>
                        <?php endif; ?>
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