<?php

namespace App\Controllers;

class SKUsaha extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH'
        ];
        return view('/pagesUser/SKUsaha', $data);
    }
}
