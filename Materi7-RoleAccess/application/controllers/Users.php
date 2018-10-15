<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Musers');
		//$this->load->library('session');
	}

	public function index()
	{
		$name=$this->input->post("name");
		$pass=$this->input->post("pass");
		$this->Musers->setSesi($name,$pass);
		if ($this->session->userdata("name")) {
			$data = array(
				"name"=>$this->session->userdata("name"),
				"pass"=>$this->session->userdata("pass"),
			);
		} else {
			$data = array();
		}

		$this->load->view('header', $data);
		$this->load->view('Users/nav');
		$this->load->view('Users/login');
		$this->load->view('footer');
	}
	public function users()
	{
		$data = array("userdarimodel" => $this->Musers->getUsers());
		$this->load->view('header', $data);
		$this->load->view('Users/nav');
		$this->load->view('Users/main');
		$this->load->view('footer');
	}
	public function profile()
	{
		$data = array("userdarimodel" => $this->Musers->getUsers());
		$this->load->view('header', $data);
		$this->load->view('Users/nav');
		$this->load->view('Users/main');
		$this->load->view('footer');
	}
	public function adduser()
	{
		$data = array("userdarimodel" => $this->Musers->getUsers());
		$this->load->view('header', $data);
		$this->load->view('Users/nav');
		$this->load->view('Users/main');
		$this->load->view('footer');
	}

}
