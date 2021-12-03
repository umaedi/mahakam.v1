<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriDokumen extends Model
{
    protected $table = 'kategori_dokumen';
    protected $useTimestamps = true;
    protected $allowedFields = ['icon_kategori', 'nama_kategori'];
    public function getKategoriDokumen($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
