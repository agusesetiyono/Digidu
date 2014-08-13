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
	'post_url' => "blog/manage_user/save",
	'role' => $this->Muser->get_role(),
	'p_role' => '',
	'nama' => '',
	'username' => '',
	'email' => '',
	'hp' => '',
	);
	
	$this->load->view('auth/create_user',$data);
	}
	
	public function edit_user($id)
	{
	$level = $this->session->userdata('level');		
	$id_user = $this->session->userdata('id_user');
	$x = $this->Muser->get_row_user($id);
	
	$data = array(
	'menu' => $this->usermodel->get_menu_for_level($level),
	'page_title' => "Users",
	'sub_judul' => "Create User",
	'post_url' => "blog/manage_user/update/".$id,
	'role' => $this->Muser->get_role(),
	'p_role' => $x->row()->role_id,
	'nama' => $x->row()->nama,
	'username' => $x->row()->username,
	'email' => $x->row()->email,
	'hp' => $x->row()->hp,
	'status' => $x->row()->status,
	);
	
	$this->load->view('auth/edit_user',$data);
	}
	
	function update($id){
	$post = $this->input->post();
		
	if (!empty($post['password'])) {
	$data=array(
	'nama'=>$post['nama'],
	'username' => $post['username'],
	'email' => $post['email'],
	'password' => MD5($post['password']),
	'hp' => $post['hp'],
	'status' => $post['status'],
	);
	}
	else {
	$data=array(
	'nama'=>$post['nama'],
	'username' => $post['username'],
	'hp' => $post['hp'],
	'status' => $post['status'],
	);
	}
	
	$this->Muser->ubah_user($data,$id);	
	redirect('blog/manage_user/index');
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
	
	$this->Muser->ubah_user($data);
	
	$pesan = "Selamat data berhasil tersimpan !";
	$this->session->set_flashdata('notif', $pesan);
	redirect('blog/manage_user/index');
	}
	
	
	
	
	
	
}
	


