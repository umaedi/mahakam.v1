<?php

namespace App\Controllers;

use \App\Models\PengantarModel;
use \App\Models\StrukturModel;
use \App\Models\TugasFungsiModel;
use \App\Models\DokumenModel;
use \App\Models\GeneralSetting;

class Profile extends BaseController
{
    protected $PengantarModel;
    protected $StrukturModel;
    protected $TugasFungsiModel;
    protected $DokumenModel;
    protected $GeneralSetting;
    public function __construct()
    {

        $this->PengantarModel = new PengantarModel();
        $this->StrukturModel = new StrukturModel();
        $this->TugasFungsiModel = new TugasFungsiModel();
        $this->DokumenModel = new DokumenModel();
        $this->GeneralSetting = new GeneralSetting();
    }
    public function pengantar()
    {
        $data = [
            'title'         => 'Mahakam | Kata pengantar',
            'settings'      => $this->GeneralSetting->getSettings(),
            'pengantar'     => $this->PengantarModel->getUser()
        ];
        return view('page/pengantar', $data);
    }

    public function struktur()
    {
        $data = [
            'title'         => 'Mahakam | Struktur organisasi',
            'settings'      => $this->GeneralSetting->getSettings(),
            'struktur' => $this->StrukturModel->getStruktur()
        ];
        return view('page/struktur', $data);
    }

    public function tugas_fungsi()
    {
        $data = [
            'title'         => 'Mahakam | Tugas pokok dan fungsi',
            'settings'      => $this->GeneralSetting->getSettings(),
            'tugas'         => $this->TugasFungsiModel->getTugas()
        ];
        return view('page/tugas_fungsi', $data);
    }
}
