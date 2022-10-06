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

    protected $allowedFields = [];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function getPengajuan($id_master_pengajuan = false)
    {
        if ($id_master_pengajuan == false) {
            return $this
                ->select('')
                ->join('')
                ->where([''])
                ->findAll();
        }
        return $this
            ->select('')
            ->join('')
            ->where([''])
            ->first();
    }
}
