<?php

namespace App\Models;

use CodeIgniter\Model; // seperti melakukan import jika di java

class NewsModel extends Model
{
    protected $table = 'news'; // salah satu cara dari memasukkan database
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
