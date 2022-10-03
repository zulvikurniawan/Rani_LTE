<?php

namespace App\Controllers;

// jika memakai contsruct
// use App\Models\AccountModel;

class Admin extends BaseController
{
    protected $AccountModel;

    public function index()
    {
        $data = [
            'title' => 'Admin | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'account' => $this->AccountModel->getRT(),
        ];

        $validation = \config\Services::validation();
        return view('pages/adminView', $data);
    }

    //method untuk melihat detail akun
    public function detail($id_account)
    {
        $data = [
            'title' => 'Detail Account | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];

        return view('pages/accountDetail', $data);
    }

    //method untuk form tambah akun
    public function Add()
    {
        $data = [
            'title' => 'Add Account | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'validation' => \config\Services::validation()
        ];

        return view('pages/accountAdd', $data);
    }

    //method untuk function simpan akun
    public function save()
    {
        // dd($this->request->getVar());
        //validasi create account
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[account.nik]|min_length[16]|max_length[16]',
                'errors' => [
                    'required' => 'NIK harus diisi.',
                    'is_unique' => 'NIK sudah terdaftar.',
                    'min_length' => 'NIK kurang dari 16 angka.',
                    'max_length' => 'NIK lebih dari 16 angka.',

                ]
            ],

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ],

        ])) {
            // $validation = \config\Services::validation();
            return redirect()->to('/Admin/Add')->withInput();
        }


        //proses save
        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'id_jabatan' => '1',
            'password' => $this->request->getVar('password')
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/Admin');
    }

    //method untuk function hapus akun
    public function delete($id_account)
    {
        $this->AccountModel->delete($id_account);
        session()->setFlashdata('hapusData', 'Data berhasil dihapus.');
        return redirect()->to('/Admin');
    }

    //method untuk form edit
    public function edit($id_account)
    {
        $data = [
            $this->request->getVar('id_account'),
            'title' => 'Edit Account | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'admin',
            'SidebarMenuActive' => 'admin',
            'validation' => \config\Services::validation(),
            'jabatan' => $this->JabatanModel->getJabatan(),
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];
        return view('pages/accountEdit', $data);
    }

    //method untuk function update
    public function update($id_account)
    {
        //cek data yang dikirim oleh form
        // dd($this->request->getVar());
        if (!$this->validate([
            // 'nik' => [
            //     'rules' => $rule_nip,
            //     'errors' => [
            //         'required' => 'NIK harus diisi.'
            //     ]
            // ],

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ],

            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.'
                ]
            ],

        ])) {
            return redirect()->to('/Admin/edit/' . $id_account)->withInput();
        }

        //proses penyimpanan
        $this->AccountModel->save([
            'id_account' => $id_account,
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
        ]);

        session()->setFlashdata('ubahData', 'Data berhasil diubah.');
        return redirect()->to('/Admin');
    }
}
