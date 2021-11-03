<?php

namespace App\Models;

use CodeIgniter\Model;

class AgendaModel extends Model
{
    protected $table = 'agenda';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_agenda', 'slug', 'tag', 'kategori', 'img', 'lokasi', 'tanggal', 'deskripsi'];

    public function getAgenda($slug = false)
    {
        if ($slug == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function getAgendaLimit()
    {
        return $this->findAll(2);
    }

    public function getAgendaRcent()
    {
        return $this->orderBy('id', 'DESC')->findAll(3);
    }
}
