<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table = 'dokumen';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_file', 'slug', 'file', 'tanggal'];

    public function get_dokumen($id = false)
    {
        if ($id == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
