<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= isset($title) ? $title : 'Pagina' ?> </title>
    <!-- <script src="https://cdn.tailwindcss.com/"></script> --> 
    <link href="<?= LOCALHOST ?>/css/index.css?<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="<?= LOCALHOST ?>/css/style.bundle.css?v=<?= time() ?>" rel="stylesheet" type="text/css" />
    <link href="<?= LOCALHOST ?>/css/custom.css" rel="stylesheet" type="text/css" />
    <script src="<?= LOCALHOST ?>/js/fontsicons.js" crossorigin="anonymous"></script>
    <!-- <script defer src="<?= LOCALHOST ?>/js/alpinejs.js"></script> -->
</head>
<body class="bg-metal w-full text-white">

    <div class="top-0 flex flex-col justify-center font-bold w-full text-center">
        <h1 class="text-3xl w-full">ANUARIO DEL EICO</h1>
        <span>Sexto Año. Egresados</span>
    </div>

    <script src="<?= LOCALHOST ?>/js/plugins/plugins.bundle.js"></script>
    <script src="<?= LOCALHOST ?>/js/scripts.bundle.js"></script>
    <script src="<?= LOCALHOST ?>/js/datatable/datatables.bundle.js?v=<?= time() ?>"></script>
    <script src="<?= LOCALHOST ?>/js/datatable/basic.js?v=<?= time() ?>"></script>
</body>
</html>