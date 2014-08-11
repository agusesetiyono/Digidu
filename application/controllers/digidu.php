<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Digidu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mregistrasi');
	}
	public function index()
	{
		$this->load->view('home');
	}
	
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters(' <span style="color:#FF0000">', '</span>');
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$success = $this->auth->do_login($username,$password);
			if($success)
			{		
				if ( $this->session->userdata('level') == 1){
				redirect('blog/blog/index');
				}
				elseif ($this->session->userdata('level') == 2){
				redirect('digidu/index');
				}
				else {
				echo "kelompok lain";
				}
			}
			
			else
			{
				$data['login_info'] = "Maaf, username dan password salah!";
				$data['site_name'] = "Blog";
				$this->load->view('login',$data);		
			}
		}
	}
	
	
	public function register()
	{
	if( FALSE == ($data = $this->session->flashdata('notif'))){
	$notifikasi = '';
	}
	else
	{
	$notifikasi = $data;
	}

	
	$data = array(
	'post_url' => 'digidu/save_registrasi',
	'notifikasi' => $notifikasi,
	);
	
	$this->load->view('register',$data);
	}
	
	function save_registrasi(){
	$post = $this->input->post();
		
	$data=array(
	'nama'=>$post['nama'],
	'username'=>$post['username'],
	'password' =>MD5($post['password']),
	'level' =>'2',
	'email' =>$post['email'],
	'tgl_registrasi' => date('Y-m-d').' '.gmdate("H:i:s", time()+60*60*7),
	);
	
	$x = $this->Mregistrasi->cek_user($post['username']);
	if($x->num_rows()>1)
	{
	$pesan = "Maaf username telah digunakan sebelumnya, silahkan menggunakan username lain";
	$this->session->set_flashdata('notif', $pesan);
	redirect('digidu/register');
	}
	else
	{
	$this->Mregistrasi->insert_user($data);	
	$x = $this->Mregistrasi->cek_user($post['username']);
	$id = $x->row()->id_user;
	redirect('digidu/register_next/'.$id);
	}
	}
	
	public function register_next($id)
	{
	$data = array(
	'post_url' => 'digidu/save_kelengkapan/'.$id,
	);
	
	$this->load->view('register-next',$data);
	}
	
	function save_kelengkapan($id){
	$post = $this->input->post();
	$foto = $_FILES["foto"]["name"];
	$c = $_SERVER['DOCUMENT_ROOT'].'/Digidu/foto/'; 
	$tanggal = date('YmdHis');
	$new_image_name = str_replace(" ", "_", $tanggal.$id.$foto);
	move_uploaded_file($_FILES["foto"]["tmp_name"],$c.$new_image_name);
	
	$data=array(
	'tgl_lahir'=>$post['tgl_lahir'],
	'jenis_kelamin' => $post['jenis_kelamin'],
	'profesi' => $post['profesi'],
	'alamat' =>$post['alamat'] ,
	'kabupaten' => $post['kabupaten'],
	'provinsi' => $post['provinsi'],
	'foto' => $new_image_name,
	'hp' => $post['hp'],	
	);
	
	$this->Mregistrasi->ubah_user($data,$id);	
	redirect('digidu/login');
	}
	
	

	public function profile()
	{
	$this->auth->restrict();
	$level = $this->session->userdata('level');	
	$id = $this->session->userdata('id_user');
	$x = $this->Mregistrasi->get_data_user($id);
	
	$data=array(
	'tgl_lahir'=>$x->row()->tgl_lahir,
	'jenis_kelamin' => $x->row()->jenis_kelamin,
	'profesi' => $x->row()->profesi,
	'alamat' =>$x->row()->alamat ,
	'kabupaten' => $x->row()->kabupaten,
	'provinsi' => $x->row()->provinsi,
	'foto' => '',
	'hp' => $x->row()->hp,	
	);
	
	$this->load->view('profile',$data);
	}
	
	function logout()
	{
		if($this->auth->is_logged_in() == true)
		{
			// jika dia memang sudah login, destroy session
			$this->auth->do_logout();
		}
		// larikan ke halaman utama
		redirect(base_url());
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */