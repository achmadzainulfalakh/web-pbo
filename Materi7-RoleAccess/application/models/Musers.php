<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	public function getUsers()
	{
		$query = $this->db->select('*')
					->from('users')
					->where(
						array('level'=>'admin')
					)
					->or_where(
						array('level'=>'user')
					)
					->get();
		return $query->result();
	}
	public function getUser($id)
	{
		$query = $this->db->select('*')
					->from('users')
					->where(
						array('id'=>'$admin')
					)
					->get();
		return $query->result();
	}
	public function setSesi($name,$pass)
	{
		$query = $this->db->select('*')
					->from('users')
					->where(
						array('name'=>'$name','pass'=>'$pass')
					)
					->get();
		//return $query->result();
					if ($query->result()) {
						$this->session->set_userdata($query->result());
					}
	}
	
}