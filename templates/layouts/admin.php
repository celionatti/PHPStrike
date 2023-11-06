<?php

use celionatti\Bolt\Helpers\FlashMessages\BootstrapFlashMessage;


?>

<!DOCTYPE html>
<html lang="en_US" data-bs-theme="auto">

<head>
    <script src="<?= get_script('color-modes.js') ?>"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= get_image('img/favicon.png', "icon") ?>" />
    <link rel="apple-touch-icon" href="<?= get_image('img/favicon.png', "icon") ?>" />
    <link type="text/css" rel="stylesheet" href="<?= get_stylesheet('all.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?= get_stylesheet('admin.css'); ?>">
    <!-- Bootstrap library -->
    <link type="text/css" rel="stylesheet" href="<?= get_bootstrap('css/bootstrap.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?= get_bootstrap('css/bootstrap-icons.css'); ?>">
    <title>NattiQ | Admin Dashboard</title>
    <?php $this->content('header') ?>
</head>

<body class="sb-nav-fixed">
    <?= BootstrapFlashMessage::alert(); ?>
    <?= partials("admin-header") ?>
    <div id="layoutSidenav">
        <?= partials("admin-sidebar") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <!-- Your Content goes in here. -->
                    <?php $this->content('content'); ?>
                </div>
            </main>
            <?= partials("admin-footer") ?>
        </div>
    </div>

    <script src="<?= get_package('jquery/jquery-3.6.3.min.js'); ?>"></script>
    <script src="<?= get_script('admin.js'); ?>"></script>
    <script src="<?= get_bootstrap('js/bootstrap.bundle.min.js'); ?>"></script>
    <?php $this->content('script') ?>
</body>

</html>