<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
	}
	public function getUser($name,$pass)
	{
		$query = $this->db->select('*')
					->from('users')
					->where(
						array(
							'name' => $name,
							'pass' => $pass
							))
					->get();
		if (!$query->num_rows() == 0) {
			$this->session->set_userdata(array('name'=>$name,'pass'=>$pass));
		}
		return $query;
	}
	function users_id()
	{
	return $this->session->userdata('id');
	}

	function username()
	{
	return $this->session->userdata('name');
	}

	function password()
	{
	return $this->session->userdata('pass');
	}
}