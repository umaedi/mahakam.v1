<?php

namespace App\Controllers;

use \App\Models\AgendaModel;

class Agenda extends BaseController
{
    protected $AgendaModel;
    public function __construct()
    {
        $this->AgendaModel = new AgendaModel();
    }
    public function index()
    {
        $data = [
            'title'             => 'Mahakam | Agenda',
            // 'agenda'            => $this->AgendaModel->paginate(5, 'agenda'),
            'agenda'            => $this->AgendaModel->getAgenda(),
            'pager'             => $this->AgendaModel->pager,
            'getAgendaRecen'    => $this->AgendaModel->getAgendaRcent()
        ];
        return view('page/agenda', $data);
    }

    public function p($slug)
    {
        $data = [
            'title'             =>  'Mahakam | Membangun Mahakam Ulu Untuk Semua Sejahtera Berkeadilan',
            'agenda'            =>  $this->AgendaModel->getAgenda($slug),
            'getAgendaRecen'    => $this->AgendaModel->getAgendaRcent()
        ];
        return view('blogpost/index', $data);
    }
}
