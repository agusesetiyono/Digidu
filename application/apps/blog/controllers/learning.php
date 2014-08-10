<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
 
class Learning extends CI_Controller { 
	function __construct()
	{ 
		parent::__construct(); 
		
		/* muat library dan helper yang dibutuhkan */ 
		$this->load->library(array('session'));  
		$this->load->helper(array('url', 'form','text','date','typography')); 
		$this->load->model(array('learning_model','blog_model'));

		$this->CI =& get_instance();

	}
	private function stripHTMLtags($str)
	{
		$search = array ("'<script[^>]*?>.*?</script>'si",  // Strip out javascript 
						 "'<[\/\!]*?[^<>]*?>'si",          // Strip out HTML tags 
						 "'([\r\n])[\s]+'",                // Strip out white space 
						 "'&(quot|#34);'i",                // Replace HTML entities 
						 "'&(amp|#38);'i", 
						 "'&(lt|#60);'i", 
						 "'&(gt|#62);'i", 
						 "'&(nbsp|#160);'i", 
						 "'&(iexcl|#161);'i", 
						 "'&(cent|#162);'i", 
						 "'&(pound|#163);'i", 
						 "'&(copy|#169);'i", 
						 "'&#(\d+);'e");                    // evaluate as php 

		$replace = array ("", 
						 "", 
						 "\\1", 
						 "\"", 
						 "&", 
						 "<", 
						 ">", 
						 " ", 
						 chr(161), 
						 chr(162), 
						 chr(163), 
						 chr(169), 
						 "chr(\\1)"); 

		$t = preg_replace_callback($search,$replace,$str); 
		return $t;
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
	
	public function index($limit = 0)
	{ 	
		$data['title'] = "Learning Media"; 
		$data['posts'] = $this->learning_model->get_posts($limit);
		$data['limit'] =$limit;
		$data['categories'] = $this->learning_model->get_categories();
		
		$this->load->view('vblog/post_v', $data);
		
	}
	
	public function post($uri) // get a post based on id
	{
		//$this->load->model('router_model');
		//$this->router_model->cache_routes();
		
		$id = $this->learning_model->get_uri($uri)->row()->id_post;
		
		$data['query'] 		= $this->learning_model->get_post($id);
		$data['post_id']	= $id;
		$data['blog'] 	= $this->blog_model->get_post_by_id($id);
		if($this->learning_model->get_post($id))
		{
			foreach($this->learning_model->get_post($id) as $row)
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
				$this->load->view('vblog/post_detail_v',$data);
			}
			
		}
		else
			show_404();
	}
	public function category($slug = FALSE)
	{
		$data['title'] = 'Kategori';
		$data['categories'] = $this->learning_model->get_categories();
		
		if( $slug == FALSE )
			show_404();
		else
		{
			$data['category'] = $this->learning_model->get_category(NULL,$slug); // get category details
			$data['query'] = $this->learning_model->get_category_post($slug); // get post in the category
		}
		
		$this->load->view('vblog/category_v',$data);
	}
	
}