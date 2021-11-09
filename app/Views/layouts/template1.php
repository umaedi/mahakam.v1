<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fak -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fakeLoader.min.css" type="text/css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap5/bootstrap.min.css" type="text/css">

    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app-responsive.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-responsive.css" type="text/css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2baad1d54e.js" crossorigin="anonymous"></script>

    <!-- AOS Animate -->
    <link rel=" stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- tooltips -->
    <script src="<?= base_url(); ?>/assets/js/popper.js"></script>

    <!-- SweetAlert -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/sweetalert2.min.css">

    <title>Mahakam</title>
</head>

<body>
    <div class="fakeLoader"></div>
    <!-- view content -->
    <?= $this->include('layouts/navbar_blog'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('layouts/footerv2'); ?>



    <!-- All Js -->
    <script src="<?= base_url(); ?>/assets/js/bootstrap5/bootstrap.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async=""></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script script src="<?= base_url(); ?>/assets/js/fakeLoader.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/sweetalert2.min.js"></script>

    <script>
        $.fakeLoader({
            spinner: 'spinner4',
            bgColor: '#fff'
        });

        // Aos
        AOS.init({
            once: true
        });

        // // Scroll bar
        // $(document).ready(function() {
        //     $(window).on('scroll', function() {
        //         if ($(window).scrollTop() > 80) {
        //             $("nav").addClass('navbar-bg');
        //         } else {
        //             $("nav").removeClass('navbar-bg');
        //         }
        //     });
        // });

        // tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });
    </script>
</body>

</html>