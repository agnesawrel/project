<?php

namespace App\Models;

use CodeIgniter\Model;

class Todolist_model extends Model
{
    protected $table = 'todolist';
    protected $primaryKey = 'idkegiatan';
    protected $allowedFields = ['kegiatan', 'status'];

    public function getActiveTasks()
    {
        return $this->where('status', 'aktif')->findAll();
    }

    public function addTask($data)
    {
        $this->insert($data);
    }

    public function markTaskAsDone($id)
    {
        $this->update($id, ['status' => 'selesai']);
    }

    public function deleteTask($id)
    {
        $this->delete($id);
    }
}
