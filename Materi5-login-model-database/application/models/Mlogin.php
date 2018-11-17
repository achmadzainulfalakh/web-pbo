<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }
    public function getUser($email,$pass)
    {
        $query = $this->db->get_where('users',array('email' => $email,'password' => $pass));
        if (!$query->num_rows() == 0) {
            $this->session->sess_destroy();
            $this->session->set_userdata($query->row_array());
        }
        return $query;
    }
    function getUserData()
    {
        return $this->session->userdata();
    }
    function getUserName()
    {
        return $this->session->userdata('username');
    }
    function getUserFullName()
    {
        return $this->session->userdata('fullname');
    }
    function getUserEmail()
    {
        return $this->session->userdata('email');
    }
    function getUserPass()
    {
        return $this->session->userdata('password');
    }
    function getUserId()
    {
        return $this->session->userdata('id');
    }
    function getUserLevel()
    {
        return $this->session->userdata('level');
    }
}
/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */
