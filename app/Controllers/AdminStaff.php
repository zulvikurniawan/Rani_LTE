<?php

namespace App\Controllers;

// jika memakai contsruct
// use App\Models\AccountModel;

class AdminStaff extends BaseController
{
    protected $AccountModel;
    protected $JabatanModel;

    public function index()
    {
        $data = [
            'title' => 'Admin Staff | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'adminStaff',
            'SidebarMenuActive' => 'adminStaff',
            'account' => $this->AccountModel->getStaff(),
        ];

        $validation = \config\Services::validation();
        return view('pages/adminStaffView', $data);
    }

    //method untuk form tambah akun
    public function add()
    {
        $data = [
            'title' => 'Add Account Staff | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'adminStaff',
            'SidebarMenuActive' => 'adminStaff',
            'jabatan' => $this->JabatanModel->getJabatan(),
            'validation' => \config\Services::validation()
        ];

        return view('pages/accountStaffAdd', $data);
    }

    //method untuk function simpan akun
    public function save()
    {
        // dd($this->request->getVar());
        //validasi create account
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[account.nik]|min_length[18]|max_length[18]',
                'errors' => [
                    'required' => 'NIK harus diisi.',
                    'is_unique' => 'NIK sudah terdaftar.',
                    'min_length' => 'NIK kurang dari 18 angka.',
                    'max_length' => 'NIK lebih dari 18 angka.',
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
            return redirect()->to('/AdminStaff/Add')->withInput();
        }


        //proses save
        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'id_jabatan' => '2'
        ]);

        session()->setFlashdata('tambahData', 'Data berhasil ditambahkan.');
        return redirect()->to('/AdminStaff');
    }

    //method untuk function hapus akun
    public function delete($id_account)
    {
        $this->AccountModel->delete($id_account);
        session()->setFlashdata('hapusData', 'Data berhasil dihapus.');
        return redirect()->to('/AdminStaff');
    }

    //method untuk form edit
    public function edit($id_account)
    {
        $data = [
            $this->request->getVar('id_account'),
            'title' => 'Edit Account | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'adminStaff',
            'SidebarMenuActive' => 'adminStaff',
            'validation' => \config\Services::validation(),
            'jabatan' => $this->JabatanModel->getJabatan(),
            'admin' => $this->AccountModel->getAdmin($id_account)
        ];
        return view('pages/accountStaffEdit', $data);
    }

    //method untuk function update
    public function update($id_account)
    {
        //cek data yang dikirim oleh form
        // dd($this->request->getVar());
        if (!$this->validate([
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
            return redirect()->to('/AdminStaff/edit/' . $id_account)->withInput();
        }

        //proses penyimpanan
        $this->AccountModel->save([
            'id_account' => $id_account,
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
        ]);

        session()->setFlashdata('ubahData', 'Data berhasil diubah.');
        return redirect()->to('/AdminStaff');
    }
}
