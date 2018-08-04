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
		if ($query) {
			$this->session->set_userdata('name');
			$this->session->set_userdata('pass');
		}
		return $query;
	}
}