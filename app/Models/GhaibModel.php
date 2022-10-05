<?php

namespace App\Models;

use CodeIgniter\Model;

class GhaibModel extends Model
{
    protected $table      = 'surat_keterangan_ghaib';
    protected $primaryKey = 'id_SKGhaib';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_Lengkap', 'tempat_Lahir', 'tanggal_Lahir', 'nik', 'negara', 'pekerjaan', 'alamat', 'status', 'agama', 'jenis_kelamin',  'spRT', 'ktp', 'kk'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
