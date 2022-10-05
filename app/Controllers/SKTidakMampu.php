<?php

namespace App\Controllers;

class SKTidakMampu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH'
        ];
        return view('/pagesUser/SKTidakMampu', $data);
    }
}
