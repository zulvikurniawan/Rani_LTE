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
                            <h3 class="card-title">Tambah Akun Staff Kelurahan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="/AdminStaff/save" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nik">NIP</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik" placeholder="Input NIP" autofocus value="<?= old('nik'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nik'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="Input Nama Lengkap" value="<?= old('nama'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Input Password" value="<?= old('password'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
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