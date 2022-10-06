<?php

namespace App\Controllers;

// jika memakai contsruct
// use App\Models\AccountModel;

class Dashboard extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Home | KELURAHAN BUARAN INDAH',
        ];

        return view('pagesUser/dashboardUser', $data);
    }

    public function pengajuan()
    {
        $user = session()->get('user');
        $id_account = $user['id_account'];
        $data = [
            'title' => 'Daftar Pengajuan | KELURAHAN BUARAN INDAH',
            'pengajuan' => $this->PengajuanModel->getPengajuan($id_account),
        ];

        return view('pagesUser/dashboardUserPengajuan', $data);
    }

    public function bantuan()
    {
        $data = [
            'title' => 'Bantuan | KELURAHAN BUARAN INDAH',
        ];

        return view('pagesUser/dashboardUserBantuan', $data);
    }
}
