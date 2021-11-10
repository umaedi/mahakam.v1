<?php

namespace App\Controllers;

use \App\Models\BupatiModel;
use \App\Models\WakilModel;

class Biografi extends BaseController
{
    protected $BupatiModel;
    protected $WakilModel;
    public function __construct()
    {
        $this->BupatiModel = new BupatiModel();
        $this->WakilModel = new WakilModel();
    }
    public function bupati()
    {
        $data = [
            'title'  => 'Mahakam | Bupati',
            'bupati' => $this->BupatiModel->get_bupati()
        ];
        return view('biografi/bupati', $data);
    }

    public function wakil()
    {
        $data = [
            'title'  => 'Mahakam | Wakil',
            'wakil' => $this->WakilModel->getWakil()
        ];
        return view('biografi/wakil', $data);
    }
    //--------------------------------------------------------------------

}
