<?php

namespace App\Controllers;

use App\Models\MasyarakatModel;

class Dashboard extends BaseController
{

    protected $MasyarakatModel;

    public function index()
    {
        // $summary =  $this->MasyarakatModel->getDashboard();
        // $totalData = 0;
        // foreach ($summary as $s) {
        //     $totalData += $s['total'];
        // }
        $data = [
            'title' => 'Dashboard | KELURAHAN BUARAN INDAH',
            // 'SidebarMenuOpen' => 'dashboard',
            // 'SidebarMenuActive' => 'dashboard',
            // 'summary' => $summary,
            // 'total' => $totalData
        ];

        // dd($data['summary']['0']);


        return view('lasman/dashboardUser', $data);
    }

    public function Admin()
    {
        // $summary =  $this->MasyarakatModel->getDashboard();
        // $totalData = 0;
        // foreach ($summary as $s) {
        //     $totalData += $s['total'];
        // }
        $data = [
            'title' => 'Dashboard | KELURAHAN BUARAN INDAH',
            // 'SidebarMenuOpen' => 'dashboard',
            // 'SidebarMenuActive' => 'dashboard',
            // 'summary' => $summary,
            // 'total' => $totalData
        ];

        // dd($data['summary']['0']);


        return view('lasman/dashboardAdminLasman', $data);
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


        return view('lasman/pengajuanAdminLasman', $data);
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


        return view('lasman/kelolaDataAdmin', $data);
    }
}
