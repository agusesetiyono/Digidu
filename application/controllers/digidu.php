<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Digidu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function register_next()
	{
		$this->load->view('register-next');
	}
	public function profile()
	{
		$this->load->view('profile');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */