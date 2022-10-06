<?php

namespace App\Models;

use CodeIgniter\Model;

class PindahPergiModel extends Model
{
    protected $table      = 'surat_keterangan_pindah_pergi';
    protected $primaryKey = 'id_SKPindahPergi';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik', 'nama_Lengkap', 'no_kk', 'nama_kk', 'alamat_sekarang', 'alamat_pindah', 'jumlah_pindah', 'spRT', 'ktp', 'kk', 'ijin_tinggal', 'status_pengajuan', 'keterangan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
