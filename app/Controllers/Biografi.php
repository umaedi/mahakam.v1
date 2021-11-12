<?php

namespace App\Controllers;

use \App\Models\BupatiModel;
use \App\Models\WakilModel;
use \App\Models\UserModel;
use \App\Models\GeneralSetting;

class Biografi extends BaseController
{
    protected $BupatiModel;
    protected $WakilModel;
    protected $UserModel;
    protected $GeneralSetting;
    public function __construct()
    {
        $this->BupatiModel = new BupatiModel();
        $this->WakilModel = new WakilModel();
        $this->UserModel = new UserModel();
        $this->GeneralSetting = new GeneralSetting();
    }
    public function bupati()
    {
        $data = [
            'title'     => 'Mahakam | Bupati',
            'profile'   => $this->UserModel->getUser(),
            'bupati'    => $this->BupatiModel->get_bupati(),
            'settings'  => $this->GeneralSetting->getSettings()
        ];
        return view('biografi/bupati', $data);
    }

    public function wakil()
    {
        $data = [
            'title'         => 'Mahakam | Wakil',
            'profile'       => $this->UserModel->getUser(),
            'wakil'         => $this->WakilModel->getWakil(),
            'settings'      => $this->GeneralSetting->getSettings()
        ];
        return view('biografi/wakil', $data);
    }
    //--------------------------------------------------------------------

}
