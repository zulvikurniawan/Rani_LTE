<?php

namespace App\Controllers;

class SKOrangSama extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH'
        ];
        return view('/pagesUser/SKOrangSama', $data);
    }
}
