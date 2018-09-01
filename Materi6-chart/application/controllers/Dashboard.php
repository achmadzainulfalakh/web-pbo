<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mchart");
	}

	public function index()
	{
		$data = array(
			'buku' => $this->Mchart->getBuku(),
			);
		$this->load->view('header',$data);
		$this->load->view('Dashboard/main');
		$this->load->view('footer');


	}
}
