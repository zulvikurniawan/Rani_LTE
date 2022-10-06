<?php

namespace App\Models;

use CodeIgniter\Model;

class UsahaModel extends Model
{
    protected $table      = 'surat_keterangan_usaha';
    protected $primaryKey = 'id_SKUsaha';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_Lengkap', 'tempat_Lahir', 'tanggal_Lahir', 'nik', 'negara', 'pekerjaan', 'alamat',  'agama', 'jenis_kelamin', 'spRT', 'ktp', 'kk', 'fotoUsaha', 'status_pengajuan', 'keterangan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
