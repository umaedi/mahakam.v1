<?php

namespace App\Controllers;

use \App\Models\DokumenModel;

class Dokumen extends BaseController
{
    protected $DokumenModel;
    public function __construct()
    {
        $this->DokumenModel = new DokumenModel();
    }
    public function download()
    {
        $data['dokumen'] = $this->DokumenModel->get_dokumen();
        return view('dokumen/index', $data);
    }

    public function download_file($id)
    {
        // 
    }
    //--------------------------------------------------------------------

}
