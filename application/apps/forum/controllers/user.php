<?php

class User extends CI_Controller {
    public $data = array();
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->user_model->check_role();
    }
    
	public function cek_login($username,$password)
    {
        $this->load->model('user_model');
        $this->user_model->pass_check_login($username,$password);
        if ($this->user_model->error_count != 0) {
            $this->data['error_login']    = $this->user_model->error;
        } else {
            redirect('forum/user');
        }
               
        $this->data['title']   = 'User Join or Login :: '.CIBB_TITLE;
        $this->load->view('header', $this->data);
        $this->load->view('user/join');
        $this->load->view('footer');
    }
	
    public function join()
    {
                
        $tmp_success = $this->session->userdata('tmp_success');
        if ($tmp_success != NULL) {
            // new user created
            $this->session->unset_userdata('tmp_success');
            $this->data['tmp_success'] = 1;
        }
        
        // event login button
        if ($this->input->post('btn-login'))
        {
            
			$this->load->model('user_model');
            $this->user_model->check_login();
			
			
            if ($this->user_model->error_count != 0) {
                $this->data['error_login']    = $this->user_model->error;
            } else {
                redirect('forum/thread');
            }
			
			
        }
        
        $this->data['title']   = 'User Join or Login :: '.CIBB_TITLE;
        $this->load->view('header', $this->data);
        $this->load->view('user/join');
       
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('forum/user/join');
    }
    
    public function index()
    {
        $this->data['title']   = 'User Index :: '.CIBB_TITLE;
        $this->load->view('header', $this->data);
        $this->load->view('user/index');
        $this->load->view('footer');
    }
}