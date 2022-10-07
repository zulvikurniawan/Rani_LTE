<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class DashboardAdmin extends BaseController
{

    protected $MasyarakatModel;
    protected $PengajuanModel;

    public function index()
    {
        $data = [
            'title' => 'Dashboard | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'dashboard',
            'SidebarMenuActive' => 'dashboard',
            'total' => $this->PengajuanModel->select('count(id_master_pengajuan) as total')->first()
        ];
        // dd($data['total']);
        return view('pages/adminDashboard', $data);
    }


    public function pengajuan()
    {
        $summary =  $this->MasyarakatModel->getDashboard();
        $totalData = 0;
        foreach ($summary as $s) {
            $totalData += $s['total'];
        }
        $data = [
            'title' => 'Dashboard | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'dashboard',
            'SidebarMenuActive' => 'dashboard',
            'summary' => $summary,
            'total' => $totalData
        ];

        // dd($data['summary']['0']);


        return view('pagesUser/pengajuanAdmin', $data);
    }
    public function dataAdmin()
    {
        $summary =  $this->MasyarakatModel->getDashboard();
        $totalData = 0;
        foreach ($summary as $s) {
            $totalData += $s['total'];
        }
        $data = [
            'title' => 'Dashboard | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'dashboard',
            'SidebarMenuActive' => 'dashboard',
            'summary' => $summary,
            'total' => $totalData
        ];

        // dd($data['summary']['0']);


        return view('pagesUser/kelolaDataAdmin', $data);
    }
}
