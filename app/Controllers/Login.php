<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class login extends BaseController
{
    protected $AccountModel;
    // mengarahkan ke tampilan login
    public function index()
    {
        $data = [
            'title' => 'Login | KELURAHAN BUARAN INDAH',
        ];

        return view('pagesUser/login', $data);
    }

    // proses login
    public function proses()
    {
        // ambil dataq dari form login
        $nik = $this->request->getVar('nik');
        $password = $this->request->getVar('password');

        // ambil data dari model
        $user = $this->AccountModel->getNik($nik);
        $level = $this->AccountModel->getLevel($nik);
        // dd($level);
        // logic login
        if ($nik == null || $password == null) {
            session()->setFlashdata('error', 'NIK atau password Tidak Boleh Kosong.');
            return redirect()->to('/login')->withInput();
        }
        if ($user == null) {
            session()->setFlashdata('error', 'NIK Tidak Terdaftar.');
            return redirect()->to('/login')->withInput();
        } else {
            if ($password == $user['password'] && $level['level'] == '1') {
                session()->set('user', $user);
                return redirect()->to('/Dashboard');
            }
            if ($password == $user['password'] && $level['level'] == '2') {
                session()->set('user', $user);
                return redirect()->to('/DashboardAdmin');
            } else {
                session()->setFlashdata('error', 'Password Salah.');
                return redirect()->to('/login')->withInput();
            }
        }
    }

    //menampilkan page regietser
    public function register()
    {
        $data = [
            'title' => 'Register | KELURAHAN BUARAN INDAH',
            'jabatan' => $this->JabatanModel->getJabatan(),
            'validation' => \config\Services::validation()
        ];

        return view('pagesUser/register', $data);
    }

    //login save
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
            return redirect()->to('/Login/register')->withInput();
        }

        //proses save
        $this->AccountModel->save([
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'password' => $this->request->getVar('password'),
            'id_jabatan' => '1'
        ]);

        session()->setFlashdata('register', 'Data berhasil ditambahkan.');
        return redirect()->to('/Login');
    }

    public function logout()
    {
        session()->destroy('user');
        session()->setFlashdata('success', 'Anda Berhasil Logout.');
        return redirect()->to('/Home');
    }
}
