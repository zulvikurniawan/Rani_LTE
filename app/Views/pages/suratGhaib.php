<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund" style="margin-bottom: 50px;">
    <!-- Main content -->
    <section class="content">
        <div class="form">

            <a href="/Pengajuan/cetakSurat/<?= $pengajuan['id_master_pengajuan']; ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

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
                        <td style="font-weight: bold;"><?= $pengajuanDetail['nama_Lengkap']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;">Jenis Kelamin</td>
                        <td style="width: 10px;">:</td>
                        <td><?= $pengajuanDetail['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;">Tempat/Tgl. Lahir</td>
                        <td style="width: 10px;">:</td>
                        <td><?= $pengajuanDetail['tempat_Lahir']; ?>/ <?= $pengajuanDetail['tanggal_Lahir']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;">Bangsa/Agama</td>
                        <td style="width: 10px;">:</td>
                        <td><?= $pengajuanDetail['negara']; ?>/<?= $pengajuanDetail['agama']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;">Status</td>
                        <td style="width: 10px;">:</td>
                        <td><?= $pengajuanDetail['status']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;">Pekerjaan</td>
                        <td style="width: 10px;">:</td>
                        <td><?= $pengajuanDetail['pekerjaan']; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;">Alamat</td>
                        <td style="width: 10px;">:</td>
                        <td><?= $pengajuanDetail['alamat']; ?></td>
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
            </div>
        </div>
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>
<!-- akhir java skript -->