<?php

namespace App\Models;

use CodeIgniter\Model;

class WakilModel extends Model
{
    protected $table = 'wakil_bupati';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'img', 'jabatan', 'periode', 'agama', 'ttl', 'istri', 'anak1', 'anak2', 'sd', 'smp', 'sma', 's1', 's2', 'tahun1', 'karir1', 'tahun2', 'karir2', 'tahun3', 'karir3', 'tahun4', 'karir4', 'tahun5', 'karir5', 'tahun6', 'karir6', 'tahun7', 'karir7'];

    public function getWakil($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
