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
        $data = [
            'title' => 'Daftar Pengajuan | KELURAHAN BUARAN INDAH',
            'account' => $this->AccountModel->getUser(),
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
