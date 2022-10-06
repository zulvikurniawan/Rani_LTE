<?php

namespace App\Models;

use CodeIgniter\Model;

class PengajuanModel extends Model
{
    protected $table      = 'master_pengajuan';
    protected $primaryKey = 'id_master_pengajuan';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_SKGhaib', 'id_SKOrangSama', 'id_SKPindahPergi', 'id_SK_TidakMampu', 'id_SKUsaha', 'id_account', 'pengajuan', 'nik_pengajuan', 'nama', 'status_pengajuan', 'keterangan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getPengajuan($id_account, $id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('master_pengajuan.*')
                ->where('id_account', $id_account)
                ->findAll();
        }
        return $this
            ->select('master_pengajuan.*')
            ->where('id_master_pengajuan', $id_master_pengajuan)
            ->first();
    }
    public function getProsesPengajuan($status)
    {
        return $this
            ->select('master_pengajuan.*')
            ->where('status_pengajuan', $status)
            ->findAll();
    }

    public function getSuratGhaib($id_SKGhaib, $id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,status,pekerjaan,alamat,spRT,ktp,kk')
                ->join('surat_keterangan_ghaib as a', 'a.id_SKGhaib = master_pengajuan.id_SKGhaib')
                ->findAll();
        }
        return $this
            ->select('master_pengajuan.*,nama_Lengkap,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,status,pekerjaan,alamat,spRT,ktp,kk')
            ->join('surat_keterangan_ghaib as a', 'a.id_SKGhaib = master_pengajuan.id_SKGhaib')
            ->where('id_SKGhaib', $id_SKGhaib)
            ->first();
    }

    public function getSuratOrangSama($id_SKOrangSama, $id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,pekerjaan,alamat,spRT,ktp,kk,dokumen_bersangkutan')
                ->join('surat_keterangan_orang_yang_sama as a', 'a.id_SKOrangSama = master_pengajuan.id_SKOrangSama')
                ->findAll();
        }
        return $this
            ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,pekerjaan,alamat,spRT,ktp,kk,dokumen_bersangkutan')
            ->join('surat_keterangan_orang_yang_sama as a', 'a.id_SKOrangSama = master_pengajuan.id_SKOrangSama')
            ->where('id_SKOrangSama', $id_SKOrangSama)
            ->first();
    }

    public function getSuratPindahPergi($id_SKPindahPergi, $id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('master_pengajuan.*,nik,nama_Lengkap,no_kk,nama_kk,alamat_sekarang,alamat_pindah,jumlah_pindah,spRT,ktp,kk,ijin_tinggal')
                ->join('surat_keterangan_pindah_pergi as a', 'a.id_SKPindahPergi = master_pengajuan.id_SKPindahPergi')
                ->findAll();
        }
        return $this
            ->select('master_pengajuan.*,nik,nama_Lengkap,no_kk,nama_kk,alamat_sekarang,alamat_pindah,jumlah_pindah,spRT,ktp,kk,ijin_tinggal')
            ->join('surat_keterangan_pindah_pergi as a', 'a.id_SKPindahPergi = master_pengajuan.id_SKPindahPergi')
            ->where('id_SKPindahPergi', $id_SKPindahPergi)
            ->first();
    }

    public function getSuratTidakMampu($id_SKTidakMampu, $id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,pekerjaan,alamat,spRT,ktp,kk,rincian_biaya')
                ->join('surat_keterangan_tidak_mampu as a', 'a.id_SKTidakMampu = master_pengajuan.id_SKTidakMampu')
                ->findAll();
        }
        return $this
            ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,pekerjaan,alamat,spRT,ktp,kk,rincian_biaya')
            ->join('surat_keterangan_tidak_mampu as a', 'a.id_SKTidakMampu = master_pengajuan.id_SKTidakMampu')
            ->where('id_SKTidakMampu', $id_SKTidakMampu)
            ->first();
    }
    public function getSuratUsaha($id_SKUsaha, $id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,pekerjaan,alamat,spRT,ktp,kk,fotoUsaha')
                ->join('surat_keterangan_usaha as a', 'a.id_SKUsaha = master_pengajuan.id_SKUsaha')
                ->findAll();
        }
        return $this
            ->select('master_pengajuan.*,nik,nama_Lengkap,jenis_kelamin,tempat_Lahir,tanggal_Lahir,negara,agama,pekerjaan,alamat,spRT,ktp,kk,fotoUsaha')
            ->join('surat_keterangan_usaha as a', 'a.id_SKUsaha = master_pengajuan.id_SKUsaha')
            ->where('id_SKUsaha', $id_SKUsaha)
            ->first();
    }
}
