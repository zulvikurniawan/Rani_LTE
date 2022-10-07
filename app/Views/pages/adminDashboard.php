<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund">
  <!-- Main content -->
  <section class="content">
    <div class="card m-3">
      <div class="card-header">
        <h2>Dashboard</h2>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row justify-content-around">
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4>Tanggal</h4>
                <h4><?php echo date("Y-m-d"); ?></h4>
              </div>
              <div class="icon">
                <i class="fas fa-calendar-alt"></i>
              </div>
            </div>
          </div>
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-warning text-white">
              <div class="inner">
                <h4>Jam</h4>
                <h4><?php echo date("Y-m-d H:i:s"); ?></h4>
              </div>
              <div class="icon">
                <i class="fas fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="col-4">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Total Pengajuan</h4>
                <h4><?= $total['total']; ?></h4>
              </div>
              <div class="icon">
                <i class="fas fa-file"></i>
              </div>
            </div>
          </div>
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

<?= $this->endSection(); ?>
<!-- akhir java skript -->