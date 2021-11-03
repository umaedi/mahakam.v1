<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama',];

    public function getKategori($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
