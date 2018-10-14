<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mchart extends CI_model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getBuku()
	{
		$query = $this->db->select('*')
					->from('buku')
					->group_by('jenis')
					->get();
		return $query;
	}
	
}