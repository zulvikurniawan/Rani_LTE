<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper container-backgorund" style="margin-bottom: 50px;">
    <!-- Main content -->
    <section class="content">
        <div class="form">

            <a href="/Pengajuan/cetakSurat/<?= $pengajuanDetail['id_SKTidakMampu']; ?>" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>

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
                    <h6>SURAT KETERANGAN TIDAK MAMPU
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
                    <p>Berdasarkan keterangan yang bersangkutan dan keterangan Pengantar ketua RT.003/01 tanggal <?php echo date("d /m /y"); ?> nama tersebut diatas adalah warga kami berasal dari keluarga tidak mampu, Sekolah di SMK Bhakti Mulya Kota Tangerang.</p>
                    <p>
                        Demikian surat keterangan ini dibuat untuk dipergunakan sebagaimana mestinya.
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

<?= $this->endSection(); ?>

<!-- java skript -->
<?= $this->section('javascript'); ?>
<?= $this->endSection(); ?>
<!-- akhir java skript -->