<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_user extends CI_Controller {
public function __construct() {
    parent::__construct();
	$this->load->model('Muser');
	$this->load->model('usermodel');
	$this->auth->restrict();
} 
	
	public function index()
	{
	$level = $this->session->userdata('level');		
	$id_user = $this->session->userdata('id_user');
	
	if( FALSE == ($data = $this->session->flashdata('notif'))){
	$notifikasi = '';
	}
	else
	{
	$notifikasi = $data;
	}
	
	
	$data = array(
	'menu' => $this->usermodel->get_menu_for_level($level),
	'page_title' => "Users",
	'sub_judul' => "Data User",
	'pengguna' => $this->Muser->get_user(),
	'message' => $notifikasi,
	);
	
	$this->load->view('auth/index',$data);
	}
	
	public function create()
	{
	$level = $this->session->userdata('level');		
	$id_user = $this->session->userdata('id_user');
	
	
	$data = array(
	'menu' => $this->usermodel->get_menu_for_level($level),
	'page_title' => "Users",
	'sub_judul' => "Create User",
	'post_url' => "blog/manage_user/save"
	);
	
	$this->load->view('auth/create_user',$data);
	}
	
	function save(){
	$post = $this->input->post();
	$data=array(
	'nama'=>$post['nama'],
	'username'=>$post['username'],
	'email'=>$post['email'],
	'hp'=>$post['hp'],
	'email'=>$post['email'],
	'password'=>MD5($post['password']),
	'level'=>'2',
	);
	
	$this->Muser->insert_user($data);
	
	$pesan = "Selamat data berhasil tersimpan !";
	$this->session->set_flashdata('notif', $pesan);
	redirect('blog/manage_user/index');
	}
	
	
	
	
	
	
}
	


