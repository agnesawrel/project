<?php

namespace App\Controllers;

use App\Models\Todolist_model;

class Todolist extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Todolist_model();
    }

    public function index()
    {
        $data['todolist'] = $this->model->getActiveTasks();
        return view('todo/index', $data);
    }

    public function addTask()
    {
        $kegiatan = $this->request->getPost('kegiatan');
        $data = [
            'kegiatan' => $kegiatan,
            'status' => 'aktif'
        ];
        $this->model->addTask($data);
        return redirect()->to('/todolist');
    }

    public function markAsDone($id)
    {
        $this->model->markTaskAsDone($id);
        return redirect()->to('/todolist');
    }

    public function deleteTask($id)
    {
        $this->model->deleteTask($id);
        return redirect()->to('/todolist');
    }
}
