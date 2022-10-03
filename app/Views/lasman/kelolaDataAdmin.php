<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht,initial-scale=1,maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/aset/Responsive-Landing-Page-main/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- css bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- css data table -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

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
                    <a href="/Dashboard/Admin"><span i class='bx bxs-dashboard'></i></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="/Dashboard/pengajuan"><span i class='bx bxs-data'></i></span>
                        <span>Pengajuan</span></a>
                </li>
                <li>
                    <a href="/Dashboard/DataAdmin" class="active"><span i class='bx bx-file'></i></span>
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
                Kelola Data Admin
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
            <div class="container" style="margin-top: 6rem;">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <button type="btn" style="margin-bottom: 20px; margin-left: 85%; padding: 5px 8px 5px 8px; border: none; border-radius: 5px; border: 1px solid grey;"><a href="#">Tambah
                            Akun</a></button>
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>Tokyo</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>San Francisco</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Office</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </maint>
    </div>

    <!-- script bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- script data table -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



    <!-- script link data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>



</body>

</html>