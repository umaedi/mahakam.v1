<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_agenda', 'slug', 'tanggal', 'deskripsi'];

    public function getAgenda($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
