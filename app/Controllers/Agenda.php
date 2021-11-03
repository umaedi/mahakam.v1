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
            'title'             => 'Agenda',
            'agenda'            => $this->AgendaModel->getAgenda(),
            'getAgendaRecen'    => $this->AgendaModel->getAgendaRcent()
        ];
        return view('page/agenda', $data);
    }

    public function p($slug)
    {
        $data = [
            'agenda' =>  $this->AgendaModel->getAgenda($slug),
            'getAgendaRecen'    => $this->AgendaModel->getAgendaRcent()
        ];
        return view('blogpost/index', $data);
    }
}
