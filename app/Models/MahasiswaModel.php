<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jurusan', 'semester'];
    public function getActiveItems()
    {
        return $this->where('id')
                    ->orderBy('ASC')
                    ->findAll();
    }
}