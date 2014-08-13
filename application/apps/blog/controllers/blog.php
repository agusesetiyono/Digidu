<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		$this->auth->restrict();
		$this->load->model(array('blog_model','learning_model'));
		$this->CI =& get_instance();

	}
	
	public function index($limit = 0)
	{	
		
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level),
			'page_title' => "Users",
			'sub_judul' => "Data User",
			'blog' => $this->blog_model->get_post($limit),
			'limit' => $limit,
			'title' => 'blog',
			);
		
		
		if ($level == 1){

		$this->load->view('vblog/index',$data);
		}
		else
		{
		redirect(base_url());
		}


	}
	public function search($str='')
	{	
		$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		$data['blog'] = $this->blog_model->search_blog($str);
		$data['title']='blog';


		$this->load->view('vblog/index',$data);
		

	}
	
	public function del($id)
	{

		$this->blog_model->del_post($id);

		$this->index($limit = 0);
	}
	
	public function all($limit = 0)
	{	
		$data['blog'] = $this->blog_model->get_post($limit);
		$data['limit']=$limit;
		$data['title']='blog';
		$this->load->view('vblog/index',$data);

	}

	public function edit($id)
	{ 

		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level),
			'page_title' => "Users",
			'sub_judul' => "Data User",
			'blog' => $this->blog_model->get_post_by_id($id),
			'title' => 'Edit blog',
			'kategori' => $this->blog_model->get_kategori_blog(),
			);
		
		
		$this->load->view('vblog/edit_post',$data);
		
		
		
	}
	
	public function newpost()
	{ 

		
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level),
			'page_title' => "Users",
			'sub_judul' => "Data User",
			'title' => 'Tambah blog baru',
			'kategori' => $this->blog_model->get_kategori_blog(),
			);

		if ($level == 1){

		$this->load->view('vblog/new_post',$data);
		}
		else
		{
		redirect(base_url());
		}
		
		
	}

	
	
	
	public function update($id)
	{
	// up date blog row
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->edit($id);
		}
		else
		{
			
			$this->blog_model->update_post($id);
			
			$this->index();
		}
		
	}
	
	
	
	public function add()
	{
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->newpost();
		}
		else
		{
			$this->blog_model->add_post();
		}
		
		
	}
	public function post_success($id)
	{
		
		$data['query'] 		= $this->learning_model->get_post($id);
		
		
		
		
		if($this->learning_model->get_post($id))
		{
			foreach($this->learning_model->get_post($id) as $row)
			{		
				if(isset($_POST['submit'])){
					
					$attachment = array(
						'message' 		=> "blog baru dari learning.asiknya.org, Selamat belajar!",
						'name' 			=> $row->judul_blog ,
						'caption' 		=> '',
						'link' 			=> 'http://learning.asiknya.org/index.php/learning/post/'.$row->id_blog,
						'description' 	=> $this->stripHTMLtags(auto_typography(word_limiter($row->isi, 50))),
						'picture'		=> $this->getImageUrl($row->isi),
						'actions' 		=> array(
							array(
								'name' => 'Get Search',
								'link' => 'http://www.google.com'
								)
							)
						);
					if ($this->facebook_lib->fb->getUser()) 
					{
						try 
						{
							
							$result = $this->facebook_lib->fb->api('/319988264765724/feed/', 'post', $attachment);		
							$data['info'] = "Berhasil terkirim ke facebook group!";
						} 
						catch (FacebookApiException $e) 
						{
							error_log($e);
						}
					}
				}
				
				$this->load->view('vblog/post_success',$data);
			}		
		}

	}
	//Kategori blog
	
	public function kategori($limit = 0)
	{
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data['menu'] = $this->usermodel->get_menu_for_level($level);
		$data['category'] = $this->blog_model->get_kategori_blog();
		$data['title']='Kategori blog';
		$data['limit']=$limit;
		
		$this->load->view('vblog/kategori',$data); 
		
		
		
	}
	
	public function del_kategori($id)
	{

		$this->blog_model->del_kategori($id);
		$this->kategori($limit = 0);
	}
	
	public function edit_kategori($id)
	{ 
		
		$this->load->library('form_validation');
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data['menu'] = $this->usermodel->get_menu_for_level($level);
		$data['kategori'] = $this->blog_model->get_kategori_blog_by_id($id);
		$data['post_url'] = 'blog/blog/update_kategori/'.$id;
		$data['title']='Edit Kategori blog';
		$this->load->view('vblog/editkategori',$data); 
		
		
	}
	
	public function new_kategori()
	{ 
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data['menu'] = $this->usermodel->get_menu_for_level($level);
		$data['post_url'] = 'blog/blog/save_kategori';
		$data['title']='Tambah Kategori blog';
		$this->load->view('vblog/newkategori',$data);
		
	}
	
	function save_kategori(){
		$post = $this->input->post();
		$slug=strtolower(str_replace(" ","-",$post['nama_kategori']));
		
		$data=array(
			'nama_kategori'=>$post['nama_kategori'],
			'slug'=>$slug,
			);
		
		$this->blog_model->add_kategori($data);
		
		$pesan = "Selamat data berhasil tersimpan !";
		$this->session->set_flashdata('notif', $pesan);
		redirect('blog/blog/kategori');
	}
	
	public function update_kategori($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori blog', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->edit_kategori($id);
		}
		else
		{
			$this->blog_model->update_kategori($id);
			$this->kategori();
		}
		
	}
	
	public function add_kategori()
	{
		$data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori blog', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->new_kategori();
		}
		else
		{
			if($this->acl->has_permission('guru'))
			{
				$cid=$this->blog_model->add_kategori();
			}
			$this->kategori();
		}
	}
	
	
	



	
}

// NOTE: comments on repeating function or code are missing.
		// To get help review previous similar functions or code in same or another files
?>
