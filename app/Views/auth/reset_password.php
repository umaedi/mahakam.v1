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
                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <p><?= lang('Auth.enterCodeEmailPassword') ?></p>
                    </div>
                    <form action="<?= route_to('reset-password') ?>" method="post">
                        <?php csrf_field() ?>
                        <div class="form-group">
                            <label for="token">Token</label>
                            <input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" autocomplete="off" value="<?= old('token', $token ?? '') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.token') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= session('errors.email') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass_confirm">Repeat New Password</label>
                            <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= session('errors.pass_confirm') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn" style="width: 100%; background-color: #748a53; color:#fff">Reset password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>