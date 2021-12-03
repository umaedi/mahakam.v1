<?php

namespace App\Controllers;

use \App\Models\DokumenModel;
use \App\Models\GeneralSetting;
use \App\Models\KategoriDokumen;

class Dokumen extends BaseController
{
    protected $DokumenModel;
    protected $GeneralSetting;
    protected $KategoriDokumen;
    public function __construct()
    {
        $this->DokumenModel = new DokumenModel();
        $this->GeneralSetting = new GeneralSetting();
        $this->KategoriDokumen = new KategoriDokumen();
    }
    public function index()
    {
        $data = [
            'title'   => 'Mahakam | Dokumen',
            'settings'          => $this->GeneralSetting->getSettings(),
            'kategori'  => $this->DokumenModel->get_dokumen()
        ];
        return view('dokumen/index', $data);
    }

    public function download($slug)
    {
        $data = [
            'title' => 'Download dokumen',
            'dokumen'   => $this->DokumenModel->getDokumenBySlug($slug),
            'settings'          => $this->GeneralSetting->getSettings(),
        ];
        return view('dokumen/download_dokumen', $data);
    }

    function download_file($slug)
    {
        $data = $this->DokumenModel->getDokumenBySlug($slug);
        return $this->response->download('assets/dokumen/' . $data['file'], null);
    }
    //--------------------------------------------------------------------

}
