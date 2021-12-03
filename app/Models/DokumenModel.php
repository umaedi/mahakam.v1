<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumenModel extends Model
{
    protected $table = 'dokumen';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_file', 'slug', 'file', 'kategori', 'tanggal'];

    public function get_dokumen()
    {
        $builder = $this->db->table('dokumen');
        $builder->select('dokumen.id AS dokumenId, dokumen.nama_file, dokumen.slug,  dokumen.kategori AS dokumenKategori, dokumen.tanggal, kategori_dokumen.nama_kategori, kategori_dokumen.icon_kategori');
        $builder->join('kategori_dokumen', 'dokumen.kategori = kategori_dokumen.id');
        $query = $builder->get();
        return $query;
    }

    public function getDokumenBySlug($slug = false)
    {
        if ($slug == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function get_where()
    {
        return $this->get_where(['kategori' => 'lppd'])->getResult();
    }

    public function getDocumenLimit()
    {
        $builder = $this->db->table('dokumen');
        $builder->select('dokumen.id AS dokumenId, dokumen.nama_file, dokumen.slug,  dokumen.kategori AS dokumenKategori, dokumen.tanggal, kategori_dokumen.nama_kategori');
        $builder->join('kategori_dokumen', 'dokumen.kategori = kategori_dokumen.id');
        $query = $builder->get(3);
        return $query;
    }

    public function counAllDocument()
    {
        return $this->countAll();
    }
}
