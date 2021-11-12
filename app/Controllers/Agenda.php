<?php

namespace App\Controllers;

use \App\Models\AgendaModel;
use \App\Models\GeneralSetting;

class Agenda extends BaseController
{
    protected $AgendaModel;
    protected $GeneralSetting;
    public function __construct()
    {
        $this->AgendaModel = new AgendaModel();
        $this->GeneralSetting = new GeneralSetting();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $agenda = $this->AgendaModel->search($keyword);
        } else {
            $agenda = $this->AgendaModel;
        }
        $data = [
            'title'             => 'Mahakam | Agenda',
            'agenda'            => $agenda->paginate(5, 'agenda'),
            // 'agenda'            => $this->AgendaModel->getAgenda(),
            'settings'          => $this->GeneralSetting->getSettings(),
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
            'getAgendaRecen'    => $this->AgendaModel->getAgendaRcent(),
            'settings'          => $this->GeneralSetting->getSettings(),
        ];
        return view('blogpost/index', $data);
    }
}
