<?php

namespace App\Controllers;

class SKTidakMampu extends BaseController
{
    protected $TidakMampuModel;

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH',
            'validation' => \config\Services::validation()
        ];
        return view('/pagesUser/SKTidakMampu', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'nama_Lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus diisi'
                ]
            ],
            'tempat_Lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir Harus diisi'
                ]
            ],
            'tanggal_Lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir Harus diisi'
                ]
            ],
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Harus diisi'
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Negara Harus diisi'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus diisi'
                ]
            ],
            'spRT' => [
                'rules' => 'uploaded[spRT]',
                'errors' => [
                    'uploaded' => 'File Tidak Boleh Kosong'
                ]
            ],
            'ktp' => [
                'rules' => 'uploaded[ktp]',
                'errors' => [
                    'uploaded' => 'File Tidak Boleh Kosong'
                ]
            ],
            'kk' => [
                'rules' => 'uploaded[kk]',
                'errors' => [
                    'uploaded' => 'File Tidak Boleh Kosong'
                ],
            ],
            'rincian_biaya' => [
                'rules' => 'uploaded[rincian_biaya]',
                'errors' => [
                    'uploaded' => 'File Tidak Boleh Kosong'
                ],
            ]
        ])) {

            return redirect()->to('/SKTidakMampu')->withInput();
        }

        $filespRT = $this->request->getFile('spRT');
        $filespRT->move('file');
        $namaspRT = $filespRT->getName();

        $filektp = $this->request->getFile('ktp');
        $filektp->move('file');
        $namaktp = $filektp->getName();

        $filekk = $this->request->getFile('kk');
        $filekk->move('file');
        $namakk = $filekk->getName();

        $filerincian_biaya = $this->request->getFile('rincian_biaya');
        $filerincian_biaya->move('file');
        $namarincian_biaya = $filerincian_biaya->getName();


        $this->TidakMampuModel->save([
            'nama_Lengkap' => $this->request->getVar('nama_Lengkap'),
            'tempat_Lahir' => $this->request->getVar('tempat_Lahir'),
            'tanggal_Lahir' => $this->request->getVar('tanggal_Lahir'),
            'nik' => $this->request->getVar('nik'),
            'negara' => $this->request->getVar('negara'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'spRT' => $namaspRT,
            'ktp' => $namaktp,
            'kk' => $namakk,
            'rincian_biaya' => $namarincian_biaya
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dikirim');

        return redirect()->to('/SKTidakMampu');
    }
}
