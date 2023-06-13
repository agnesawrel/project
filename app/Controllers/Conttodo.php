<?php

namespace App\Controllers;

class Conttodo extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | TodoList',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        // return view('conttodo/hometodo'); // untuk menampilkan view

        return view('conttodo/hometodo', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Todolist'
        ];
        // memanggil beberapa view

        echo view('conttodo/abouttodo', $data);
    }
}
