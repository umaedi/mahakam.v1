<?php

namespace App\Models;

use CodeIgniter\Model;

class PengantarModel extends Model
{
    protected $table = 'pengantar';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'logo', 'pengantar'];
    public function getUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
