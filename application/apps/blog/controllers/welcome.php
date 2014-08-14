<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');



	}
	public function index()
	{
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level)

		);
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */