<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usermodel');
		
		$this->load->helper(array('url', 'form','text','date','typography')); 
		$this->load->model(array('blog_model','learning_model','page_model'));
		$this->CI =& get_instance();

	}
	
	private function getImageUrl($str)
	{
		$src = '';
		$matches = array();
		$src_pattern = '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i';
		if(preg_match($src_pattern, $str, $matches)) {
			$src = $matches[1];
		}
		return trim($src);
	}
	
	public function pages($uri) 
	{
		
		
		$id = $this->page_model->get_slug($uri)->row()->id_page;
		
		$data['query'] 		= $this->page_model->get_detail_page($id);
		$data['post_id']	= $id;
		
		if($this->page_model->get_detail_page($id))
		{
			foreach($this->page_model->get_detail_page($id) as $row)
			{
				$data['title'] = $row->judul;
				$data['content'] = auto_typography(word_limiter($row->isi, 50));
				if($this->getImageUrl($row->isi)!= NULL)
				{
					$data ['image'] = $this->getImageUrl($row->isi);
				}
				else
				{
					$data ['image'] = base_url().'assets/img/noise.png';
				}
				$this->load->view('vblog/statis_page',$data);
			}
			
		}
		else
			show_404();
	}
	
	public function index($limit = 0)
	{	
	$this->auth->restrict();
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level),
			'page_title' => "Users",
			'sub_judul' => "Data User",
			'page' => $this->page_model->get_page($limit),
			'limit' => $limit,
			'title' => 'blog',
			);
		
		

		$this->load->view('page/index',$data);
		


	}
	
	public function edit($id)
	{ 
$this->auth->restrict();
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$x = $this->page_model->get_page_id($id);
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level),
			'page_title' => "Users",
			'sub_judul' => "Data User",
			'title' => 'Edit page baru',
			'kategori' => $this->blog_model->get_kategori_blog(),
			'menu_title' => $x->row()->menu_title,
			'slug' => $x->row()->slug,
			'judul' => $x->row()->judul,
			'isi' => $x->row()->isi,
			'status' => $x->row()->status,
			'url' => 'blog/page/update/'.$id,
			);

		$this->load->view('page/create',$data);
		
		
		
	}
	
	public function create()
	{ 
$this->auth->restrict();
		
		$level = $this->session->userdata('level');		
		$id_user = $this->session->userdata('id_user');
		
		$data = array(
			'menu' => $this->usermodel->get_menu_for_level($level),
			'page_title' => "Users",
			'sub_judul' => "Data User",
			'title' => 'Tambah page baru',
			'kategori' => $this->blog_model->get_kategori_blog(),
			'menu_title' => '',
			'slug' => '',
			'judul' => '',
			'isi' => '',
			'status' => '',
			'url' => 'blog/page/add',
			);

		$this->load->view('page/create',$data);
		
	}

	
	
	
	public function update($id)
	{
	// up date blog row
		$this->load->helper('form');
		$this->load->library('form_validation');
			$this->form_validation->set_rules('menu_title', 'Nama Menu', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->edit($id);
		}
		else
		{
			
			$this->page_model->update_page($id);
			
			$this->index();
		}
		
	}
	
	
	
	public function add()
	{
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('menu_title', 'Nama Menu', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->create();
		}
		else
		{
			$this->page_model->add_page();
		}
		
		
	}
	
	
	public function del($id)
	{

		$this->page_model->del($id);
		$this->index($limit = 0);
	}
	
	
	
	
	



	
}

// NOTE: comments on repeating function or code are missing.
		// To get help review previous similar functions or code in same or another files
?>
