<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
    <!-- Main content -->
    <section class="content">
        <div class="card m-3">
            <div class="card-header">
                <h2>Daftar Akun Staff Kecamatan</h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <?php if (session()->getFlashdata('tambahData')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('tambahData'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('ubahData')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('ubahData'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('hapusData')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?= session()->getFlashdata('hapusData'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <a href="/AdminStaff/Add" class="btn btn-primary mb-3">Tambah Akun Staff</a>
                <table id="tableAdmin" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Password</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($account as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>

                                <td><?= $a['nik']; ?></td>
                                <td><?= $a['nama']; ?></td>
                                <td><?= $a['password']; ?></td>
                                <td class="text-center">
                                    <!-- tombol tanpa modal -->
                                    <a href="/AdminStaff/edit/<?= $a['id_account']; ?>" type="button" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/AdminStaff/delete/<?= $a['id_account']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?');">Delete</a>
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
            "paging": true,
            "searching": true,
            "ordering": true,
            "info": true,
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