<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund" style="margin-bottom: 50px;">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid m-3">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Keterangan Reject</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/Pengajuan/reject/<?= $pengajuan['id_master_pengajuan']; ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Input Keterangan" autofocus>
                                </div>
                                <div class="form-group text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->


<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>
<!-- //membuat img preview pada inputann  -->
<!-- <script>
    function previewImg() {
        // mengambil inputan foto profil
        const fotoProfil = document.querySelector('#foto_profil');
        const imgPreview = document.querySelector('.img-preview');

        // menggati privew img
        const fileFotoProfile = new FileReader();
        fileFotoProfile.readAsDataURL(fotoProfil);

        // simpan gambar ke dalam privew imgg
        fileFotoProfile.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script> -->
<?= $this->endSection(); ?>
<!-- akhir java skript -->