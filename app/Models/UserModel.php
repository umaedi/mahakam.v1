<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_name', 'user_email', 'img', 'user_password', 'created_at', 'updated_at'];

    public function getUser($user_id = false)
    {
        if ($user_id == false) {
            return $this->findAll();
        } else {
            return $this->where(['user_id' => $user_id])->first();
        }
    }
}
