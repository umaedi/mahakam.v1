<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriDokumen extends Model
{
    protected $table = 'kategori_dokumen';
    protected $useTimestamps = true;
    protected $allowedFields = ['icon_kategori', 'nama_kategori', 'slug'];
    public function getKategoriDokumen($nama_kategori = false)
    {
        if ($nama_kategori == false) {
            return $this->findAll();
        }
        return $this->where(['nama_kategori' => $nama_kategori])->first();
    }
}
