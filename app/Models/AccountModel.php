<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
    protected $table      = 'account';
    protected $primaryKey = 'id_account';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik', 'nama', 'password', 'id_jabatan'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAdmin($id_account = false)
    {
        if ($id_account == false) {
            return $this
                ->select('account.*,nama_jabatan')
                ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
                ->findAll();
        }
        return $this
            ->select('account.*,nama_jabatan')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['id_account' => $id_account])
            ->first();
    }

    public function getUser($id_account = false)
    {
        if ($id_account == false) {
            return $this
                ->select('account.*,nama_jabatan')
                ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
                ->where(['j.level' => '1'])
                ->findAll();
        }
        return $this
            ->select('account.*,nama_jabatan')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['id_account' => $id_account, 'j.level' => '1'])
            ->first();
    }
    public function getStaff($id_account = false)
    {
        if ($id_account == false) {
            return $this
                ->select('account.*,nama_jabatan')
                ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
                ->where(['j.level' => '2'])
                ->findAll();
        }
        return $this
            ->select('account.*,nama_jabatan')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['id_account' => $id_account, 'j.level' => '1'])
            ->first();
    }

    public function getNik($nik = false)
    {
        if ($nik == false) {
            return session()->setFlashdata('error', 'NIK Tidak Boleh Kosong.');
        }
        return $this
            ->select('account.*,nama_jabatan')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['nik' => $nik])
            ->first();
    }

    public function getLevel($nik)
    {
        if ($nik == false) {
            return session()->setFlashdata('error', 'NIK Tidak Boleh Kosong.');
        }
        return $this
            ->select('level')
            ->join('jabatan as j', 'j.id_jabatan = account.id_jabatan')
            ->where(['nik' => $nik])
            ->first();
    }
}
