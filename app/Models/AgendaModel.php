<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_agenda', 'slug', 'tag', 'kategori', 'img', 'lokasi', 'tanggal', 'deskripsi'];

    public function search($keyword)
    {
        return $this->table('agenda')->like('nama_agenda', $keyword);
    }

    public function getAgenda($slug = false)
    {
        if ($slug == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function countAgenda()
    {
        return $this->countAll();
    }

    public function getAgendaLimit()
    {
        return $this->findAll(2);
    }

    public function getAgendaRcent()
    {
        return $this->orderBy('id', 'DESC')->findAll(4);
    }
}
