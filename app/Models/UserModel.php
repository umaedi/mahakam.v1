<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['user_name', 'user_email', 'user_password', 'created_at', 'updated_at'];
}
