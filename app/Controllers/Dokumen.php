<?php

namespace App\Controllers;

use \App\Models\DokumenModel;
use \App\Models\GeneralSetting;

class Dokumen extends BaseController
{
    protected $DokumenModel;
    protected $GeneralSetting;
    public function __construct()
    {
        $this->DokumenModel = new DokumenModel();
        $this->GeneralSetting = new GeneralSetting();
    }
    public function download()
    {
        $data = [
            'title'   => 'Mahakam | Download',
            'dokumen' => $this->DokumenModel->get_dokumen(),
            'settings'          => $this->GeneralSetting->getSettings(),
        ];
        return view('dokumen/index', $data);
    }

    function download_file($slug)
    {
        $data = $this->DokumenModel->get_dokumen($slug);
        return $this->response->download('assets/dokumen/' . $data['file'], null);
    }
    //--------------------------------------------------------------------

}
