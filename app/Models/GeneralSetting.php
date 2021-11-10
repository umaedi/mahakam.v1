<?php

namespace App\Models;

use CodeIgniter\Model;

class GeneralSetting extends Model
{
    protected $table = 'general_settings';
    protected $allowedFields = ['website_name', 'slogan', 'welcome_msg', 'addres', 'contact', 'email', 'created_at', 'updated_at'];
    public function getSettings($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
