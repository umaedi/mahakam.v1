<?php

namespace App\Models;

use CodeIgniter\Model;

class BupatiModel extends Model
{
    protected $table = 'bupati';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'jabatan', 'motto', 'periode', 'agama', 'ttl', 'istri', 'anak1', 'anak2', 'anak3', 'anak4', 'anak5', 'sd', 'smp', 'sma', 'kuliah', 'tahun1', 'karir1', 'tahun2', 'karir2', 'tahun3', 'karir3', 'tahun4', 'karir4', 'tahun5', 'karir5', 'tahun6', 'karir6', 'tahun7', 'karir7', 'img'];

    public function get_bupati($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
