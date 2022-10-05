<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styleLogin.css">
    <title><?= $title; ?></title>
</head>

<body style="background-color:#e9ecef;">
    <div class="container">
        <div class="login">
            <form action="/login/save" method="post">
                <?= csrf_field(); ?>
                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('register')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('register'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('logout')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('logout'); ?>
                    </div>
                <?php endif; ?>
                <h1>Registrasi</h1>
                <hr>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Masukkan NIK" autofocus value="<?= old('nik'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nik'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Input Password" value="<?= old('password'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Input Nama Lengkap" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                </div>
                <p>
                    <a href="/Login" class="text-center" style="text-decoration:none;">Sudah Mempunyai Akun</a>
                </p>
                <p>
                    <a href="/Home" class="text-center" style="text-decoration:none;">Home</a>
                </p>
            </form>
        </div>
        <div class="right" style="position: fixed; right: 550px; margin-top: 60px;">
            <img src="/img/Kota Tangerang.png" alt="">
        </div>
    </div>
</body>

</html>