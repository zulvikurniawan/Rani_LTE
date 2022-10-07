<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- untuk koneksikan semua link yg ada di head yang berada di assets -->
    <base href="<?php echo base_url('assets') ?>/">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed container-backgorund">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper container-backgorund" style="margin-bottom: 50px;">
        <!-- Main content -->
        <section class="content">
            <div class="form">
                <div class="kop">
                    <table>
                        <tr>
                            <td><img src="/img/Kota Tangerang.png"></td>
                            <td align="CENTER">
                                <h6>PEMERINTAHAN KOTA TANGERANG</h6>
                                <h5>KECAMATAN TANGERANG</h5>
                                <h4>KELURAHAN BUARAN INDAH</h4>
                                <h7>Jl. Prof. Dr. Soepomo No. Telp.(021)5531161, Tangerang 15119</h7>
                            </td>
                        </tr>
                    </table>
                    <hr color="black">
                </div>
                <?php foreach ($detailSurat as $a) : ?>
                    <div class="lampiran" align="center">
                        <h6>SURAT KETERANGAN GHAIB
                            <hr style="font-weight: bold; width: 200px;">
                        </h6>
                        <h8>Nomor : 503/-Ekbang/2022</h8>
                    </div>

                    <div class="pembuka">
                        <p>Lurah Buaran Indah Kecamatan Tangerang Kota Tangerang dengan ini menerangkan bahwa :</p>
                    </div>

                    <div class="bio">
                        <table>
                            <tr>
                                <td style="width: 130px;">Nama</td>
                                <td style="width: 10px;">:</td>
                                <td style="font-weight: bold;"><?= $a['nama_Lengkap']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 130px;">Jenis Kelamin</td>
                                <td style="width: 10px;">:</td>
                                <td><?= $a['jenis_kelamin']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 130px;">Tempat/Tgl. Lahir</td>
                                <td style="width: 10px;">:</td>
                                <td><?= $a['tempat_Lahir']; ?>/ <?= $a['tanggal_Lahir']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 130px;">Bangsa/Agama</td>
                                <td style="width: 10px;">:</td>
                                <td><?= $a['negara']; ?>/<?= $a['agama']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 130px;">Status</td>
                                <td style="width: 10px;">:</td>
                                <td><?= $a['status']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 130px;">Pekerjaan</td>
                                <td style="width: 10px;">:</td>
                                <td><?= $a['pekerjaan']; ?></td>
                            </tr>
                            <tr>
                                <td style="width: 130px;">Alamat</td>
                                <td style="width: 10px;">:</td>
                                <td><?= $a['alamat']; ?></td>
                            </tr>
                        </table>
                    </div>

                    <div class="penutup">
                        <p>Berdasarkan Pengantar Ketua RT/RW tanggal <?php echo date("d /m /y"); ?> nama diatas adalah warga kami yang telah meninggalkan rumah sejak Bulan Desember Tahun 2009 sampai dengan sekarang.</p>
                        <p>
                            Demikian surat keterangan ini dibuat untuk dipergunakan seperlunya.
                        </p>
                    </div>

                    <div class="paraf">
                        <table>
                            <tr>
                                <td style="width: 380px;"></td>
                                <td align="center">Tangerang, <?php echo date("d /m /y"); ?> <br>An. Lurah Buaran Indah <br>Sekretaris <br><br><br>MURHAINI,SE <br>NIP.197505202010012006</td>
                            </tr>
                        </table>
                    <?php endforeach; ?>
                    </div>
            </div>
        </section>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>

    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>

    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- fontawwesome icon -->
    <script src="https://kit.fontawesome.com/9404e985a1.js" crossorigin="anonymous"></script>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


    <script>
        window.addEventListener("load", window.print());
    </script>
</body>

</html>