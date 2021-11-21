<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'email', 'subject', 'msg'];
    public function getContact($id = false)
    {
        if ($id == false) {
            return $this->orderBy('id', 'DESC')->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
