<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'user_image'];
    public function getUsers()
    {
        return $this->where(['role' => '2'])->findAll();
    }
}
