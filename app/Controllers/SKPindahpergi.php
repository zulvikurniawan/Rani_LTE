<?php

namespace App\Controllers;

class SKPindahPergi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH'
        ];
        return view('/pagesUser/SKPindahPergi', $data);
    }
}
