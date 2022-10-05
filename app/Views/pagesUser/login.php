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
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger mt-5" role="alert">
                    <?= session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success mt-5" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('register')) : ?>
                <div class="alert alert-danger mt-5" role="alert">
                    <?= session()->getFlashdata('register'); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('logout')) : ?>
                <div class="alert alert-danger mt-5" role="alert">
                    <?= session()->getFlashdata('logout'); ?>
                </div>
            <?php endif; ?>
            <form action="/login/proses" method="post">
                <h1>Login</h1>
                <hr>
                <div class="form-group">
                    <label for="nik">NIK / NIP</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK / NIP" value="<?= old('nik'); ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" value="<?= old('password'); ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <p>
                    <a href="/login/register" class="text-center" style="text-decoration:none;">Daftar Anggota Baru</a>
                </p>
                <p>
                    <a href="/Home" class="text-center" style="text-decoration:none;">Home</a>
                </p>
            </form>
        </div>
        <div class="right" style="position: fixed; right: 550px; margin-top: 35px;">
            <img src="/img/Kota Tangerang.png" alt="">
        </div>
    </div>
</body>

</html>