<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Musers');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		$name=$this->input->post("name");
		$pass=$this->input->post("pass");
		$this->Musers->setSesi($name,$pass);
		/*$data = array(
			"name"=>$this->Musers->getName(),
			"pass"=>$this->Musers->getPass(),
			"level"=>$this->Musers->getLevel()
		);*/
		if ($this->Musers->getName()) {
			redirect("http://localhost/web-pbo/Materi7-RoleAccess/index.php/users/users");
		} 

		$this->load->view('header');
		$this->load->view('Users/nav');
		$this->load->view('Users/login');
		$this->load->view('footer');
	}
	public function users()
	{
		if ($this->Musers->getName() == "") {
			redirect("http://localhost/web-pbo/Materi7-RoleAccess/index.php/users");
		} 
		$data = array(
			"userdarimodel" => $this->Musers->getUsers(),
			"name"=>$this->Musers->getName(),
			"pass"=>$this->Musers->getPassword(),
			"level"=>$this->Musers->getLevel()
		);
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
	public function logout()
	{
		//$this->session->unset_userdata(array("name","pass","level"));
		$this->session->sess_destroy();
		redirect("http://localhost/web-pbo/Materi7-RoleAccess/index.php/users");
	}

}

