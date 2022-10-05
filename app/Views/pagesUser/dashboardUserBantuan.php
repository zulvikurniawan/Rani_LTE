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
        <div class="big-wrapper light">
            <img src="/img/shape.png" alt="" class="shape">
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
            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Kelurahan Buaran Indah,</h1>
                            <h1>Tangerang.</h1>
                        </div>
                        <p class="text">
                            <li>Alamat : Jl. Prof. Dr. Soepomo, Tangerang, 15119</li>
                            <li>No. Telp : (021) 5531161</li>
                        </p>
                    </div>
                    <div class="right" style="padding-right: 100px; margin-bottom: 20px;">
                        <img src="/img/Kota Tangerang.png" alt="KotaTangerang" class="person" />
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="/public//aset/Responsive-Landing-Page-main/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

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

</body>

</html>