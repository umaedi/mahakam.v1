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
        $data = [
            'title'   => 'Mahakam | Download',
            'dokumen' => $this->DokumenModel->get_dokumen()
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
