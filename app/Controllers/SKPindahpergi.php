<?php

namespace App\Controllers;

use App\Models\PengajuanModel;

class SKPindahPergi extends BaseController
{
    protected $PengajuanModel;
    public function index()
    {
        $data = [
            'title' => 'Surat Keterangan | KELURAHAN BUARAN INDAH',
            'validation' => \config\Services::validation()
        ];
        return view('/pagesUser/SKPindahPergi', $data);
    }

    public function save()
    {
        // dd($this->request->getFile("kk"));
        // dd($this->request->getVar());
        if (!$this->validate([
            'nik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nik Harus diisi'
                ]
            ],
            'nama_Lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus diisi'
                ]
            ],
            'no_kk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor Kartu Keluarga Harus diisi'
                ]
            ],
            'nama_kk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kepala Keluarga Harus diisi'
                ]
            ],
            'alamat_sekarang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus diisi'
                ]
            ],
            'alamat_pindah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Harus diisi'
                ]
            ],
            'jumlah_pindah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jumalah Pindah Harus diisi'
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
            'ijin_tinggal' => [
                'rules' => 'uploaded[kk]',
                'errors' => [
                    'uploaded' => 'File Tidak Boleh Kosong'
                ],
            ]
        ])) {
            // $validation = \config\Services::validation();
            // return redirect()->to('/PengajuanSuratKeteranganGhaib/index')->withInput()->with('validation', $validation);
            return redirect()->to('/SKPindahPergi')->withInput();
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

        $fileijin_tinggal = $this->request->getFile('ijin_tinggal');
        $fileijin_tinggal->move('file');
        $namaijin_tinggal = $fileijin_tinggal->getName();

        $user = session()->get('user');

        $this->PindahPergiModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama_Lengkap' => $this->request->getVar('nama_Lengkap'),
            'no_kk' => $this->request->getVar('no_kk'),
            'nama_kk' => $this->request->getVar('nama_kk'),
            'alamat_sekarang' => $this->request->getVar('alamat_sekarang'),
            'alamat_pindah' => $this->request->getVar('alamat_pindah'),
            'jumlah_pindah' => $this->request->getVar('jumlah_pindah'),
            'spRT' => $namaspRT,
            'ktp' => $namaktp,
            'kk' => $namakk,
            'ijin_tinggal' => $namaijin_tinggal,
            'status_pengajuan' => 'Pending',
            'keterangan' => 'Pending'
        ]);

        $id = $this->PindahPergiModel->getInsertID();
        $this->PengajuanModel->save([
            'id_SKPindahPegi' => $id,
            'id_account' => $user['id_account'],
            'pengajuan' => 'Surat Keterangan Pindah Pergi',
            'status_pengajuan' => 'Pending',
            'keterangan' => 'Pending',
            'nik_pengajuan' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama_Lengkap')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dikirim');

        return redirect()->to('/SKPindahPergi');
    }
}
