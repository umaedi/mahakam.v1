<?php

namespace App\Controllers;

use \App\Models\AgendaModel;
use \App\Models\BannerModel;

class Home extends BaseController
{
	protected $AgendaModel;
	public function __construct()
	{
		$this->AgendaModel = new AgendaModel();
	}
	public function index()
	{
		$data = [
			'agendaLimit' => $this->AgendaModel->getAgendaLimit(1)
		];
		return view('index', $data);
	}
}
