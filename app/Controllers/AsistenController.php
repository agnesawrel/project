<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\LoginModel;

class AsistenController extends BaseController
{
    protected $asistenModel;
    protected $loginModel;
    public function __construct()
    {
        $this->asistenModel = new AsistenModel();
        $this->loginModel = new LoginModel();
    }

    public function index()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];
            return view('/asisten/AsistenView', $data);
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengakses data!');
            return redirect()->to(base_url('/asisten/loginasisten'));
        }
    }

    public function simpan()
    {
        helper('form');
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];

            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('asisten/simpan', $data);
            }
            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'nim', 'nama', "praktikum",
                "ipk"
            ]);
            // Mengakses Model untuk menyimpan data
            $model = model(AsistenModel::class);
            $model->simpan($post);
            $session->setFlashdata('Berhasil', 'Data berhasil disimpan');
            return redirect()->to('/asisten');
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengakses data!');
            return redirect()->to(base_url('/asisten/loginasisten'));
        }
    }

    public function update()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];



            // Memeriksa apakah melakukan submit data atau tidak.
            if (!$this->request->is('post')) {
                return view('/asisten/update', $data);
            }

            // Mengambil data yang disubmit dari form
            $post = $this->request->getPost([
                'nim', 'nama', 'praktikum', 'ipk'
            ]);

            // Mengakses Model untuk menyimpan data
            $this->asistenModel->ubah($post);
            $session->setFlashdata('Berhasil', 'Data telah diperbarui');
            return redirect()->to('/asisten');
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengakses data!');
            return redirect()->to(base_url('/asisten/loginasisten'));
        }
    }
    public function delete()
    {
        helper('form');
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];


            if (!$this->request->is('post')) {
                return view('/asisten/delete', $data);
            }

            // Mengambil data yang disubmit dari form
            $nim = $this->request->getPost('nim');
            $this->asistenModel->hapus($nim);
            $session->setFlashdata('Berhasil', 'Data telah dihapus');
            return redirect()->to('/asisten');
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengakses data!');
            return redirect()->to(base_url('/asisten/delete'));
        }
    }

    public function search()
    {
        $session = session();
        if ($session->has('username')) {
            $username = $session->get('username');
            $data = [
                'asisten' => $this->asistenModel->getAsisten(),
                'username' => $username
            ];
            if (!$this->request->is('post')) {
                return view('/asisten/search');
            }

            $nim = $this->request->getPost(['key']);

            $model = model(AsistenModel::class);
            $asisten = $model->ambil($nim['key']);

            $data = ['hasil' => $asisten];
            return view('asisten/search', $data);
        } else {
            $session->setFlashdata('error', 'Mohon login terlebih dahulu untuk mengakses data!');
            return redirect()->to(base_url('/asisten/delete'));
        }
    }

    public function home()
    {
        $session = session();
        if ($session->has('username')) {
            return redirect()->to(base_url('asisten'));
        }
        return view('asisten/loginasisten');
    }
    public function checklogin()
    {
        $model = model(LoginModel::class);
        $post = $this->request->getPost(['usr', 'pwd']);
        $cek = $model->checklogin($post);
        if ($cek > 0) {
            // login berhasil
            $session = session(); //
            $session->set('username', $post['usr']);

            return redirect()->to(base_url('/asisten'));
        } else {
            // Login gagal
            session()->setFlashdata('salah', 'Username atau password salah');
            return redirect()->to(base_url('asisten/loginasisten'));
        }
    }

    public function logout()
    {
        session()->destroy();
        // $session = session();
        // $session()->remove('username');
        return
            // view('asisten/loginasisten');
            redirect()->to(base_url('asisten/loginasisten'));
    }
}
