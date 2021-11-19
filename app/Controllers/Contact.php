<?php

namespace App\Controllers;

use \App\Models\DokumenModel;
use \App\Models\GeneralSetting;

class Contact extends BaseController
{
    protected $DokumenModel;
    protected $GeneralSetting;
    public function __construct()
    {
        $this->DokumenModel = new DokumenModel();
        $this->GeneralSetting = new GeneralSetting();
    }
    public function contact()
    {
        $data = [
            'title' => 'Mahakam | Hubungi kami',
            'settings'          => $this->GeneralSetting->getSettings()
        ];
        return view('page/contact', $data);
    }
}
