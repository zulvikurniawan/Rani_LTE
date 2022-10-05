<?php

namespace App\Models;

use CodeIgniter\Model;

class TidakMampuModel extends Model
{
    protected $table      = 'surat_keterangan_tidak_mampu';
    protected $primaryKey = 'id_SKTidakMampu';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik', 'nama_lengkap', 'no_kk', 'nama_kk', 'alamat_sekarang', 'alamat_pindah', 'agama', 'jenis_kelamin', 'jumlah_pindah', 'spRT', 'ktp', 'kk', 'rincian_biaya'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
