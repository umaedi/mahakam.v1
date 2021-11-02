<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        $data = [
            'auth'      => 'auth',
            'title'     => 'Mahakam Ulu',
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function login()
    {
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('user_email', $email)->first();
        if ($data) {
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'user_email'    => $data['user_email'],
                    'logged_in'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/administrator');
            } else {
                session()->setFlashdata('pesan', 'Password salah');
                return redirect()->to('/auth/login');
            }
        } else {
            session()->setFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('/auth/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
