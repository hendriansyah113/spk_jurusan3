<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= base_url('vendor/') ?>assetberanda/images/UMP.png" type="">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('vendor/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('vendor/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('vendor/') ?>dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-image: url('<?= site_url() ?>/assets/gedung.jpeg'); background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    <div class="login-box">
        <div class="login-logo">
            <a href="#" style="color: Black;"><b>SPK Pemilihan Jurusan</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?php if ($this->session->flashdata('pesan')) : ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= $this->session->flashdata('pesan') ?>
                    </div>
                <?php endif; ?>
                <p class="login-box-msg">Universitas Muhammadiyah Palangka Raya</p>

                <form action="<?= site_url('ControllerLogin/cekStatusLogin') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger"><?= form_error('username') ?></span>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger"><?= form_error('password') ?></span>
                    <div class="row">
                        <div class="col-6">
                            <a href="<?= site_url('controllerBeranda') ?>" class="btn btn-primary btn-block">Kembali</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url('vendor/') ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('vendor/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('vendor/') ?>dist/js/adminlte.min.js"></script>

</body>

</html>