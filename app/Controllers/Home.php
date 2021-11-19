<?php

namespace App\Controllers;

use \App\Models\AgendaModel;
use \App\Models\BannerModel;
use \App\Models\GeneralSetting;
use	\App\Models\UserModel;

class Home extends BaseController
{
	protected $AgendaModel;
	protected $GeneralSettings;
	protected $BannerModel;
	protected $UserModel;
	public function __construct()
	{
		$this->AgendaModel = new AgendaModel();
		$this->GeneralSettings = new GeneralSetting();
		$this->BannerModel = new BannerModel();
		$this->UserModel = new UserModel();
	}
	public function index()
	{
		$data = [
			'title'         => 'Mahakam | Pengaturan umum',
			'profile'       => $this->UserModel->getUser(),
			'agendaLimit' 	=> $this->AgendaModel->getAgendaLimit(1),
			'settings'      => $this->GeneralSettings->getSettings(),
			'banner'		=> $this->BannerModel->getBanner()
		];
		return view('index', $data);
	}

	public function contact()
	{
		return view('page/contact');
	}
}
