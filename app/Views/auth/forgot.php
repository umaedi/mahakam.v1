<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mahakam | Ganti password</title>

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/logo/favicon.png" type="image/x-icon">

</head>

<body class="bg-transparent">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="p-5">
                    <div class="text-center">
                        <img src="<?= base_url(); ?>/assets/img/logo/logo-mahakam.png" width="35%">
                        <h1 class="h4 text-gray-900">MAHAKAM</h1>
                        <p>Please enter registered email to change password</p>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                    </div>
                    <form action="<?= route_to('forgot') ?>" method="post" class="user">
                        <?php csrf_field() ?>
                        <div class="form-group">
                            <label for="pass">Email</label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn" style="width: 100%; background-color: #748a53; color:#fff">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>