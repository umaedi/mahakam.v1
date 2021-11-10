<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mahakam | Login</title>

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-transparent">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-xl-5 col-lg-12 col-md-9 col-sm-12">
                <div class="p-5">
                    <div class="text-center">
                        <img src="<?= base_url(); ?>/assets/img/logo/logo-mahakam.png" width="35%">
                        <h1 class="h4 text-gray-900">MAHAKAM</h1>
                        <p>Silahkan login menggunakan email dan password Anda</p>
                        <?= view('Myth\Auth\Views\_message_block') ?>
                    </div>
                    <form action="<?= route_to('login') ?>" method="post" class="user">
                        <?php csrf_field() ?>

                        <?php if ($config->validFields === ['email']) : ?>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control <?= session('errors.login') ? 'is-invalid' : ''; ?>" id="email" autocomplete="of" name="login">
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
                        <?php endif ?>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control <?= session('errors.login') ? 'is-invalid' : ''; ?>" id="pass" name="password">
                            <div class="invalid-feedback">
                                <?= session('errors.password') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn" style="width: 100%; background-color: #748a53; color:#fff">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>