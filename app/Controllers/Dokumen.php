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
            'kategori'  => $this->KategoriDokumen->getKategoriDokumen()
        ];
        return view('dokumen/index', $data);
    }

    public function download()
    {
        $data = [
            'title'   => 'Mahakam | Download',
            'dokumen' => $this->KategoriDokumen->getKategoriDokumen(),
            'settings'          => $this->GeneralSetting->getSettings(),
        ];
        return view('dokumen/download_dokumen', $data);
    }

    public function download_kategori($kategori)
    {
        $data = [
            'title'   => 'Mahakam | Download',
            'settings'          => $this->GeneralSetting->getSettings(),
            'dokumen' => $this->DokumenModel->getDokumenByKategori($kategori),
        ];
        return view('dokumen/download_dokumen', $data);
    }

    function download_file($slug)
    {
        $data = $this->DokumenModel->get_dokumen($slug);
        return $this->response->download('assets/dokumen/' . $data['file'], null);
    }
    //--------------------------------------------------------------------

}
