<?php

namespace App\Controllers;

class SKOrangSama extends BaseController
{
    protected $OrangSamaModel;

    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH',
            'validation' => \config\Services::validation()
        ];
        return view('/pagesUser/SKOrangSama', $data);
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
            'dokumen_bersangkutan' => [
                'rules' => 'uploaded[kk]',
                'errors' => [
                    'uploaded' => 'File Tidak Boleh Kosong'
                ],
            ]
        ])) {
            // $validation = \config\Services::validation();
            // return redirect()->to('/PengajuanSuratKeteranganGhaib/index')->withInput()->with('validation', $validation);
            return redirect()->to('/SKOrangSama')->withInput();
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

        $filedokumen_bersangkutan = $this->request->getFile('dokumen_bersangkutan');
        $filedokumen_bersangkutan->move('file');
        $namadokumen_bersangkutan = $filedokumen_bersangkutan->getName();

        // dd($this->request->getFile('kk'));
        $this->OrangSamaModel->save([
            'nama_Lengkap' => $this->request->getVar('nama_Lengkap'),
            'tempat_Lahir' => $this->request->getVar('tempat_Lahir'),
            'tanggal_Lahir' => $this->request->getVar('tanggal_Lahir'),
            'nik' => $this->request->getVar('nik'),
            'negara' => $this->request->getVar('negara'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'alamat' => $this->request->getVar('alamat'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'agama' => $this->request->getVar('agama'),
            'spRT' => $namaspRT,
            'ktp' => $namaktp,
            'kk' => $namakk,
            'dokumen_bersangkutan' => $namadokumen_bersangkutan,

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dikirim');

        return redirect()->to('/SKOrangSama');
    }
}
