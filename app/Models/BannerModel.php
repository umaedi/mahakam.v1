<?php

namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table = 'banner';
    protected $useTimestamps = true;
    protected $allowedFields = ['url_banner', 'url_bupati', 'url_wakil', 'img_banner', 'bupati', 'wakil'];

    public function getBanner($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
