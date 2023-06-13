<?php

namespace App\Controllers;

class PesanLulus extends BaseController
{
    public function proses($p = 'kosong')
    {
        $data['nama'] = $_GET['nama'];
        $data['nim'] = $_GET['nim'];
        $data['status'] = $_GET['status'];
        return view('tampilLulus', $data);
    }
    public function input()
    {
        return view('kelulusan');
    }
}
