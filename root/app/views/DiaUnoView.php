<!DOCTYPE html>
<html lang="en" data-theme="black">

<?php
$titulo = "avala que jopa";
include '../public/static/blocks/head.php';
?>

<body class="">

    <div class="drawer drawer-open">
        <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
            <!-- Page content here -->

            <?php include '../public/static/blocks/navbar.php'; ?>

            <h1 class="text-4xl font-bold text-center my-8">Dia 1</h1>
            
            <?php 
            //optimizacion de clases repetidas
            $imgClass = "w-0 flex-1 object-cover opacity-60 transition-all duration-500 ease-in-out hover:cursor-pointer hover:w-[350px] hover:opacity-100 hover:contrast-125 hover:scale-105 rounded-sm";
            
            //array con las rutas de imagenes para no repetir tanto codigo
            $imagenes = [
                "D1-1.jpeg",
                "D1-4.jpeg", 
                "D1-8.jpg",
                "D1-5.jpeg",
                "D1-7.jpeg"
            ];
            ?>
            
            <section class="flex w-full max-w-[1200px] h-[700px] mx-auto gap-2 px-4">
                <?php foreach($imagenes as $img): ?>
                    <img class="<?= $imgClass ?>" src="../public/static/images/<?= $img ?>" alt="Imagenes dia 1">
                <?php endforeach; ?>
            </section>

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