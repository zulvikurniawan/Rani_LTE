<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="/aset/Responsive-Landing-Page-main/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- css bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- css Redemption -->
  <link rel="stylesheet" href="/css/styleRedemption.css" />
</head>

<body>
  <main>
    <div class="big-wrapperr light">


      <header>
        <div class="container">
          <div class="logo">
            <h3>Kelurahan Buaran Indah</h3>
          </div>

          <div class="links">
            <ul>
              <li><a href="/Dashboard">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="dashboardUser.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengajuan
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/SKGhaib">Surat Keterangan
                    Ghaib</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/SKOrangSama">Surat Keterangan
                    Orang Yang Sama</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/SKPindahPergi">Surat Keterangan
                    Pindah Pergi</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/SKTidakMampu">Surat Keterangan
                    Tidak Mampu</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/SKUsaha">Surat Keterangan
                    Usaha</a>
                </div>
              </li>
              <li><a href="/Dashboard/Pengajuan">Daftar Pengajuan</a></li>
              <li><a href="/Dashboard/bantuan">Bantuan</a></li>
              <li><a href="/login/logout" class="btn">Log Out</a></li>
            </ul>
          </div>

          <div class="overlay"></div>

          <div class="hamburger-menu">
            <div class="bar"></div>
          </div>
        </div>
      </header>

      <div class="form">
        <?php if (session()->getflashdata('pesan')) : ?>
          <div class="alert alert-info" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>

        <a class="btn" href="/Dashboard">Kembali</a>
        <div class="title">Surat Keterangan Usaha</div>
        <form action="/SKUsaha/save" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>

          <div class="user-details">
            <div class="input-box">
              <span class="details">Nama Lengkap</span>
              <input type="text" id="nama_Lengkap" name="nama_Lengkap" class="form-control <?= ($validation->hasError('nama_Lengkap')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_Lengkap'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('nama_Lengkap'); ?>
              </div>
            </div>

            <div class="input-box">
              <span class="details">Tempat Lahir</span>
              <input type="text" id="tempat_Lahir" name="tempat_Lahir" class="form-control
                            <?= ($validation->hasError('tempat_Lahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tempat_Lahir'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('tempat_Lahir'); ?>
              </div>
            </div>
            <div class="input-box">
              <span class="details">Tanggal Lahir</span>
              <input type="date" id="tanggal_Lahir" name="tanggal_Lahir" class="form-control
                            <?= ($validation->hasError('tanggal_Lahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggal_Lahir'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('tanggal_Lahir'); ?>
              </div>
            </div>

            <div class="input-box">
              <span class="details">NIK</span>
              <input type="text" id="nik" name="nik" class="form-control
                            <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" value="<?= old('nik'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('nik'); ?>
              </div>
            </div>

            <div class="input-box">
              <span class="details">Negara</span>
              <input type="text" id="negara" name="negara" class="form-control
                            <?= ($validation->hasError('negara')) ? 'is-invalid' : ''; ?>" value="<?= old('negara'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('negara'); ?>
              </div>
            </div>

            <div class="input-box">
              <span class="details">Pekerjaan</span>
              <input type="text" id="pekerjaan" name="pekerjaan" class="form-control
                            <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" value="<?= old('pekerjaan'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('pekerjaan'); ?>
              </div>
            </div>

            <div class="input-box">
              <span class="details">Alamat Lengkap</span>
              <input type="text" id="alamat" name="alamat" class="form-control
                            <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('alamat'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="group">
              <label for="agama">Agama</label>
            </div>
            <div class="group-listt">
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" required id="kristen" value="kristen">
                <label for=" kristen" class="form-check-label">Kristen</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" required id="katolik" value="katolik">
                <label for="katolik" class="form-check-label">Katolik</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" required id="islam" value="islam">
                <label for="islam" class="form-check-label">Islam</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" required id="hindu" value="hindu">
                <label for="hindu" class="form-check-label">Hindu</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" required id="budha" value="budha">
                <label for="budha" class="form-check-label">Budha</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" required id="konghucu" value="konghucu">
                <label for="konghucu" class="form-check-label">Konghucu</label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
            </div>
            <div class="group-list">
              <div class="form-check">
                <input type="radio" name="jenis_kelamin" value="Laki_laki" class="form-check-input" id="laki" required>
                <label for="laki" class="form-check-label">Laki-laki</label>
              </div>
              <div class="form-check">
                <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input" id="perempuan" required>
                <label for="perempuan" class="form-check-label">Perempuan</label>
              </div>
            </div>
          </div>
          <hr style="margin-top: 50px;height: 20px;border-width: 1px;">
          <div class="title">Kelengkapan Form</div>
          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Surat
              Keterangan RT/RW</span>
            <div class="custom-file" onchange="previewLabel()">
              <input type="file" class="custom-file-input <?= ($validation->hasError('spRT')) ? 'is-invalid' : ''; ?>" id="spRT" name="spRT">
              <div class="invalid-feedback">
                <?= $validation->getError('spRT'); ?>
              </div>
              <label class="custom-file-label spRT" for="spRT">Pilih File...</label>
            </div>
          </div>

          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto KTP
              Pemilik Usaha</span>
            <div class="custom-file" onchange="previewLabel1()">
              <input type="file" class="custom-file-input <?= ($validation->hasError('ktp')) ? 'is-invalid' : ''; ?>" id="ktp" name="ktp">
              <div class="invalid-feedback">
                <?= $validation->getError('ktp'); ?>
              </div>
              <label class="custom-file-label ktp" for="ktp">Pilih File...</label>
            </div>
          </div>

          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto KK Pemilik
              Usaha</span>
            <div class="custom-file" onchange="previewLabel2()">
              <input type="file" class="custom-file-input <?= ($validation->hasError('kk')) ? 'is-invalid' : ''; ?>" id="kk" name="kk">
              <div class="invalid-feedback">
                <?= $validation->getError('kk'); ?>
              </div>
              <label class="custom-file-label kk" for="kk">Pilih File...</label>
            </div>
          </div>

          <div class=" input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto Usaha</span>
            <div class="custom-file" onchange="previewLabel6()">
              <input type="file" class="custom-file-input <?= ($validation->hasError('fotoUsaha')) ? 'is-invalid' : ''; ?>" id="fotoUsaha" name="fotoUsaha">
              <div class="invalid-feedback">
                <?= $validation->getError('fotoUsaha'); ?>
              </div>
              <label class="custom-file-label fotoUsaha" for="fotoUsaha">Pilih File...</label>
            </div>
          </div>
          <button type="submit" class="btn">Kirim</button>
        </form>
      </div>


      <!-- JavaScript Files -->

      <script src="https://kit.fontawesome.com/a81368914c.js"></script>
      <script src="./app.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script>
        function previewLabel() {
          const spRTLabel = document.querySelector('.spRT')

          console.log('test');
          spRTLabel.textContent = spRT.files[0].name;
        }
      </script>

      <script>
        function previewLabel1() {
          const ktpLabel = document.querySelector('.ktp')

          console.log('test');
          ktpLabel.textContent = ktp.files[0].name;
        }
      </script>

      <script>
        function previewLabel2() {
          const kkLabel = document.querySelector('.kk')

          console.log('test');
          kkLabel.textContent = kk.files[0].name;
        }
      </script>

      <script>
        function previewLabel3() {
          const dokumen_bersangkutanLabel = document.querySelector('.dokumen_bersangkutan')

          console.log('test');
          dokumen_bersangkutanLabel.textContent = dokumen_bersangkutan.files[0].name;
        }
      </script>

      <script>
        function previewLabel4() {
          const ijin_tinggalLabel = document.querySelector('.ijin_tinggal')

          console.log('test');
          ijin_tinggalLabel.textContent = ijin_tinggal.files[0].name;
        }
      </script>

      <script>
        function previewLabel5() {
          const rincian_biayaLabel = document.querySelector('.rincian_biaya')

          console.log('test');
          rincian_biayaLabel.textContent = rincian_biaya.files[0].name;
        }
      </script>

      <script>
        function previewLabel6() {
          const fotoUsahaLabel = document.querySelector('.fotoUsaha')

          console.log('test');
          fotoUsahaLabel.textContent = fotoUsaha.files[0].name;
        }
      </script>
</body>

</html>