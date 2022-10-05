<?php

namespace App\Controllers;

// jika memakai contsruct
// use App\Models\AccountModel;

class Home extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Home | KELURAHAN BUARAN INDAH',
        ];

        return view('pagesUser/home', $data);
    }

    public function bantuan()
    {
        $data = [
            'title' => 'Bantuan | KELURAHAN BUARAN INDAH',
        ];

        return view('pagesUser/homeBantuan', $data);
    }
}
