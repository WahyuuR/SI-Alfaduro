<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="shortcut icon" href="<?= base_url(); ?>./assets/img/logoalfaduro.png" type="image/x-icon" />

    <!-- css datatable -->
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="./assets/compiled/css/table-datatable.css">
    <!-- end datatable css -->

    <!-- css auth -->
    <link rel="stylesheet" href="./assets/compiled/css/auth.css">

    <link rel="stylesheet" href="<?= base_url(); ?>./assets/compiled/css/app.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/compiled/css/iconly.css" />
</head>

<body>
    <script src="<?= base_url(); ?>/assets/static/js/initTheme.js"></script>
    <div id="app">
        <!-- sidebar -->
        <?= $this->include('/templates/sidebar'); ?>
        <!-- end sidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <!-- start content -->
            <?= $this->renderSection('content'); ?>
            <!-- end content -->


            <!-- footer -->
            <?= $this->include('templates/footer'); ?>
            <!-- end footer -->
        </div>
    </div>
    <script src="<?= base_url(); ?>/assets/static/js/components/dark.js"></script>
    <script src="<?= base_url(); ?>/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="<?= base_url(); ?>/assets/compiled/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="<?= base_url(); ?>/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>/assets/static/js/pages/dashboard.js"></script>

    <!-- data table &jquery -->
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/static/js/pages/simple-datatables.js"></script>
</body>

</html>