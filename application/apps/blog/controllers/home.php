<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Muser');
	}
	
	public function index()
	{
		if($this->auth->is_logged_in() == false)
		{
			$this->login();
		}
		else
		{
			// load model 'usermodel'
			$this->load->model('usermodel');
			// level untuk user ini
			$level = $this->session->userdata('level');
			$nama = $this->session->userdata('nama');
			// ambil menu dari database sesuai dengan level
			$data=array(
			'menu'=>$this->usermodel->get_menu_for_level($level),
			'nama'=>$nama,
			'site_name' => "blog",
			);
			$this->load->view('auth/login',$data);
		}
	}
		
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters(' <span style="color:#FF0000">', '</span>');
		
		

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('auth/login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$success = $this->auth->do_login($username,$password);
			if($success)
			{		
				if ( $this->session->userdata('level') == 1){
				redirect('blog/manage_user/index');
				}
				elseif ($this->session->userdata('level') == 2){
				redirect('blog/cigd/registrasi');
				}
				else {
				redirect('blog/cpenilaian/reg_irja');
				}
			}
			
			else
			{
				$data['login_info'] = "Maaf, username dan password salah!";
				$data['site_name'] = "Blog";
				$this->load->view('auth/login',$data);		
			}
		}
	}
	
function base64_url_decode($input) {
 return base64_decode(strtr($input, '-_~', '+/='));
}
	
	public function tembak($username,$password)
	{
			

			$success = $this->auth->do_login($username,$this->base64_url_decode($password));
			if($success)
			{		
				if ( $this->session->userdata('level') == 1){
				redirect('blog/collate/index');
				}
				elseif ($this->session->userdata('level') == 2){
				redirect('blog/cigd/registrasi');
				}
				else {
				redirect('blog/cpenilaian/reg_irja');
				}
			}
			
			else
			{
				$data['login_info'] = "Maaf, username dan password salah!";
				$this->load->view('login_form',$data);		
			}
		
	}
	
	function logout()
	{
		if($this->auth->is_logged_in() == true)
		{
			// jika dia memang sudah login, destroy session
			$this->auth->do_logout();
		}
		// larikan ke halaman utama
		redirect('blog/home/index');
	}
	
	
}