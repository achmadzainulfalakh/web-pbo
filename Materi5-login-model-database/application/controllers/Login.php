<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encryption');

	}

	public function index()
	{
		/*enkripsi dan dekrip*/
		// $key will be assigned a 16-byte (128-bit) random key
		$key = $this->encryption->create_key(32);
		$this->encryption->initialize(
			array(
				'key' => $key,
				'salt' => "hallodunia",
				)
			);

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' =>  $this->encryption->encrypt($password)
			);

		$this->load->view('header',$data);
		$this->load->view('vlogin');
		$this->load->view('footer');

	}
}
