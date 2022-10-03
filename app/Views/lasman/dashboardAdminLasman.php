<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/aset/Responsive-Landing-Page-main/style.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/styleLasman.css">

    <title><?= $title; ?></title>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-logo">
            <h2><span>Kel. Buaran Indah</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/Dashboard/Admin" class="active"><span i class='bx bxs-dashboard'></i></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/Dashboard/pengajuan"><span i class='bx bxs-data'></i></span>
                        <span>Pengajuan</span></a>
                </li>
                <li>
                    <a href="/Dashboard/DataAdmin"><span i class='bx bx-file'></i></span>
                        <span>Kelola Data Admin</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <Navbar>
            <h1>
                <label for="nav-toggle">
                    <span><i class='bx bx-menu'></i></span>
                </label>
                Dashboard
            </h1>

            <div class="user-wrapper">
                <img src="/img/person.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Rany</h4>
                    <small>Admin</small>
                </div>
            </div>
        </Navbar>

        <maint>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1020</h3>
                        <p>Pengajuan</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-time-five'></i>
                    <span class="text">
                        <h3>07.00</h3>
                        <p></p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-calendar'></i>
                    <span class="text">
                        <h3>Kalender</h3>
                        <p></p>
                    </span>
                </li>
            </ul>
        </maint>
    </div>
</body>

</html>