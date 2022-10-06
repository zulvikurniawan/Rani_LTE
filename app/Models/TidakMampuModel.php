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

    protected $allowedFields = ['nik', 'nama_Lengkap', 'tempat_Lahir', 'tanggal_Lahir', 'negara', 'pekerjaan', 'alamat', 'jenis_kelamin', 'agama', 'spRT', 'ktp', 'kk', 'rincian_biaya', 'status_pengajuan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
