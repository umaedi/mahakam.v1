<?php

namespace App\Models;

use CodeIgniter\Model;

class StrukturModel extends Model
{
    protected $table = 'struktur';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'image_struktur'];

    public function getStruktur($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
