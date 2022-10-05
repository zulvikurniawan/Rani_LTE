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
        <a class="btn" href="/Dashboard">Kembali</a>
        <div class="title">Surat Keterangan Usaha</div>
        <form action="#">
          <div class="user-details">
            <div class="input-box">
              <span class="details">Nama Lengkap</span>
              <input type="text" class="namaLengkap" id="namaLengkap" required>
            </div>
            <div class="input-box">
              <span class="details">Tempat Lahir</span>
              <input type="text" class="tempat_lahir" id="tempat_Lahir">
            </div>
            <div class="input-box">
              <span class="details">Tanggal Lahir</span>
              <input type="date" class="tanggal_Lahir" id="tanggal_Lahir">
            </div>
            <div class="input-box">
              <span class="details">NIK</span>
              <input type="text" class="nik" id="nik">
            </div>
            <div class="input-box">
              <span class="details">Negara</span>
              <input type="text" class="negara" id="negara">
            </div>
            <div class="input-box">
              <span class="details">Pekerjaan</span>
              <input type="text" class="pekerjaan" id="pekerjaan">
            </div>
            <div class="input-box">
              <span class="details">Alamat Lengkap</span>
              <input type="text" class="alamat" id="alamat">
            </div>
          </div>

          <div class="form-group row">
            <div class="group">
              <label for="agama">Agama</label>
            </div>
            <div class="group-listt">
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" id="kristen>
                    <label for=" kristen" class="form-check-label">Kristen</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" id="katolik">
                <label for="katolik" class="form-check-label">Katolik</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" id="islam">
                <label for="islam" class="form-check-label">Islam</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" id="hindu">
                <label for="hindu" class="form-check-label">Hindu</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" id="budha">
                <label for="budha" class="form-check-label">Budha</label>
              </div>
              <div class="form-check">
                <input type="radio" name="agama" class="form-check-input" id="konghucu">
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
                <input type="radio" name="jenis_kelamin" value="L" class="form-check-input" id="laki">
                <label for="laki" class="form-check-label">Laki-laki</label>
              </div>
              <div class="form-check">
                <input type="radio" name="jenis_kelamin" value="P" class="form-check-input" id="perempuan">
                <label for="perempuan" class="form-check-label">Perempuan</label>
              </div>
            </div>
          </div>
          <hr style="margin-top: 50px;height: 20px;border-width: 1px;">
          <div class="title">Kelengkapan Form</div>
          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Surat Keterangan RT/RW</span>
            <div class="custom-file">
              <input type="file" class="spRT" id="spRT">
              <label class="custom-file-label" for="spRT">Choose file</label>
            </div>
          </div>
          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto KTP Pemilik Usaha</span>
            <div class="custom-file">
              <input type="file" class="ktp" id="ktp">
              <label class="custom-file-label" for="ktp">Choose file</label>
            </div>
          </div>
          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto KK Pemilik Usaha</span>
            <div class="custom-file">
              <input type="file" class="kk" id="kk">
              <label class="custom-file-label" for="kk">Choose file</label>
            </div>
          </div>
          <div class="input-box" style="margin-bottom: 15px;">
            <span class="details" style="display: block; font-weight: 500; margin-bottom: 5px; padding-top: 20px;">Foto Usaha</span>
            <div class="custom-file">
              <input type="file" class="fotoUsaha" id="fotoUsaha">
              <label class="custom-file-label" for="fotoUsaha">Choose file</label>
            </div>
          </div>

          <div class="button">
            <input type="submit" value="Kirim">
          </div>
        </form>
      </div>


      <!-- JavaScript Files -->

      <script src="https://kit.fontawesome.com/a81368914c.js"></script>
      <script src="./app.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>