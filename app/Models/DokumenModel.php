<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table = 'dokumen';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_file', 'slug', 'file', 'kategori', 'tanggal'];

    public function get_dokumen($kategori = false)
    {
        if ($kategori == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['kategori' => $kategori])->first();
    }

    public function getDokumenByKategori($kategori)
    {
        $this->where(['kategori' => $kategori]);
        return $this->get('dokumen')->row_array();
    }

    public function getDocumenLimit()
    {
        return $this->orderBy('id', 'DESC')->findAll(3);
    }

    public function counAllDocument()
    {
        return $this->countAll();
    }
}
