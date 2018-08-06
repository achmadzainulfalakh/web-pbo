<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->model('Mlogin');


	}

	public function index()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$arr=$this->Mlogin->getUser($username,md5($password));

		$password = md5($password);
		
		$data = array(
			'username' => $username,
			'password' =>  $password,
			'sesi' =>$this->session->userdata('name'),
			'arr' => $arr
			);
		$this->load->view('header',$data);
		$this->load->view('vlogin');
		$this->load->view('footer');
		if($this->Mlogin->username()){
			header("Location:http://localhost/web-pbo/Materi5-login-model-database/");
		} 

	}
	public function logout()
	{
		$this->session->sess_destroy();
		header("Location:http://localhost/web-pbo/Materi5-login-model-database/index.php/login/logout");
		
}
