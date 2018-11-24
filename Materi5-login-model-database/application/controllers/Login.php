<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Mlogin');
    }
    public function view($page = 'login')
    {
        $data['title'] = 'Login !';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
    }
    function login_user()
    {
        $email = $this->input->post('user_email');
        $pass = md5($this->input->post('user_pass'));
        $arr = $this->users_model->getUser($email,$pass);
        if(!empty($this->users_model->getUserName())){
            redirect(base_url($this->users_model->getUserLevel()),'refresh');
        }
    }
    public function logout_user()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'),'refresh');
    }
}
/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
