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
		$this->load->view('login');
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
	'post_url' => 'digidu/save_kelengkapan',
	);
	
	$this->load->view('register-next');
	}
	
	function save_kelengkapan(){
	$post = $this->input->post();
		
	$data=array(
	'tgl_lahir'=>$post['tgl_lahir'],
	'jenis_kelamin' => $post['jenis_kelamin'],
	'profesi' => $post['profesi'],
	'alamat' =>$post['alamat'] ,
	'kabupaten' => $post['kabupaten'],
	'provinsi' => $post['provinsi'],
	'foto' => $post['foto'],
	'hp' => $post['hp'],	
	);
	
	}
	
	

	public function profile()
	{
		$this->load->view('profile');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */