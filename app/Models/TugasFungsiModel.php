<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasFungsiModel extends Model
{
    protected $table = 'tugas_fungsi';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'logo', 'tugas_fungsi'];
    public function getTugas($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
