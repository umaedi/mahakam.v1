<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'user_image'];
    public function getUser($role = false)
    {
        if ($role == false) {
            return $this->where(['role' => '1'])->findAll();
        } else {
            return $this->findAll();
        }
    }
    public function getUserId($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }
}
