<?php

namespace App\Controllers;

use \App\Models\GeneralSetting;
use \App\Models\ContactModel;

class Contact extends BaseController
{
    protected $GeneralSetting;
    protected $ContactModel;
    public function __construct()
    {
        $this->GeneralSetting = new GeneralSetting();
        $this->ContactModel = new ContactModel();
    }
    public function contact()
    {
        $data = [
            'title'             => 'Mahakam | Hubungi kami',
            'settings'          => $this->GeneralSetting->getSettings(),
            'validation'        => \Config\Services::validation()
        ];
        return view('page/contact', $data);
    }

    public function save_msg()
    {
        if (!$this->validate([
            'nama'          => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Nama wajib diisi'
                ],
            ],
            'email'          => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Email wajib diisi'
                ],
            ],
            'subjek'          => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Subjek wajib diisi'
                ],
            ],
            'pesan'          => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pesan wajib diisi'
                ],
            ],
        ]))
            return redirect()->to('/contact')->withInput();

        $this->ContactModel->save([
            'name'      => $this->request->getVar('nama'),
            'email'     => $this->request->getVar('email'),
            'subject'    => $this->request->getVar('subjek'),
            'msg'       => $this->request->getVar('pesan')
        ]);
        session()->setFlashdata('pesan', 'Pesan Anda berhasil dikirim');
        return redirect()->to('/contact');
    }
}
