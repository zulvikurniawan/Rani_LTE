<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Surat Keterangan Ghaib</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <a type="button" class="btn btn-primary my-3" href="/Pengajuan/approval">Kembali</a>
                <table id="tableAdmin" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Tempat / Tgl. Lahir</th>
                            <th scope="col">Negara</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Surat Pengantar RT/RW</th>
                            <th scope="col">Foto KTP</th>
                            <th scope="col">Foto KK</th>
                            <th scope="col">Foto Usaha</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($detailSurat as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>

                                <td><?= $a['nik']; ?></td>
                                <td><?= $a['nama_Lengkap']; ?></td>
                                <td><?= $a['tempat_Lahir']; ?>/<?= $a['tanggal_Lahir']; ?></td>
                                <td><?= $a['negara']; ?></td>
                                <td><?= $a['pekerjaan']; ?></td>
                                <td><?= $a['alamat']; ?></td>
                                <td><?= $a['agama']; ?></td>
                                <td><?= $a['jenis_kelamin']; ?></td>
                                <td><img class="profile-user-img img-fluid" src="/file/<?= $a['spRT']; ?>" style="width: 100%;"></td>
                                <td><img class="profile-user-img img-fluid" src="/file/<?= $a['ktp']; ?>" style="width: 100%;"></td>
                                <td><img class="profile-user-img img-fluid" src="/file/<?= $a['kk']; ?>" style="width: 100%;"></td>
                                <td><img class="profile-user-img img-fluid" src="/file/<?= $a['fotoUsaha']; ?>" style="width: 100%;"></td>
                                <td class="text-center">
                                    <!-- tombol tanpa modal -->
                                    <a href="/Pengajuan/approve/<?= $a['id_master_pengajuan']; ?>" class="btn btn-primary">Approve</a>
                                    <a href="/Pengajuan/rejectform/<?= $a['id_master_pengajuan']; ?>" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>
<script>
    $(document).ready(function() {
        var table = $("#tableAdmin").DataTable({
            "lengthChange": false,
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            "autoWidth": false,
            "paging": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "responsive": true,
            "scrollX": false,
            //tambahan fitur tombol "colvis", "copy", "csv",
            // "buttons": ["excel", "pdf", "print"],
            // dom: "<'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>>" + "<'row'<'col-md-12'tr>>" + "<'row'<'col-md-5'i><'col-md-7'p>>"
        }).buttons().container().appendTo('#tableAdmin_wrapper .col-sm-4:eq(0)');
    });
</script>


<?= $this->endSection(); ?>
<!-- akhir java skript -->