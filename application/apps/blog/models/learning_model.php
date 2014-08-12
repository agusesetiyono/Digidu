<?php
class learning_model  extends CI_Model
{
	
	
	function __construct()
    {
        parent::__construct();
    }
	
	function get_uri($uri){
	$q=$this->db->query("select id_post from tbl_blog where uri='$uri'");
	return $q;
	$this->db->close();
	}
	
	function get_posts($limit='5')
	{	
		$this->db->where('status','published');
		$this->db->order_by('tanggal','desc'); 
		$this->db->limit('5',$limit);
		$query = $this->db->get('tbl_blog');	
		return $query->result();
	}
	function get_post_kategori($slug)
	{
	$query = $this->db->query("
	select b.*, a.slug, a.nama_kategori from tbl_kategori a inner join tbl_blog b
	on a.id_kategori = b.id_kategori where b.status = 'published' and a.slug='$slug'
	order by tanggal DESC
	");
	return $query->result();
	}
	
	function get_post_home($limit)
	{	
		$this->db->where('status','published');
		$this->db->order_by('tanggal','desc'); 
		$this->db->limit($limit);
		$query = $this->db->get('tbl_blog');	
		return $query->result();
	}
	
	function get_post($id)
	{
		$this->db->where('id_post',$id);
		$query = $this->db->get('tbl_blog');
		if($query->num_rows()!==0)
		{
			return $query->result();
		}
		else
			return FALSE;
	}
	
	function get_category($id = FALSE, $slug)
	{
		if( $id != FALSE)
			$this->db->where('id_kategori',$id);
		elseif( $slug )
			$this->db->where('slug',$slug);
		
		$query = $this->db->get('tbl_kategori');
		
		if( $query->num_rows() !== 0 )
		{
			return $query->result();
		}
		else
			return FALSE; // return false if no category in database
	}	
	function get_categories()
	{
		$query = $this->db->get('tbl_kategori'); 
		return $query->result();
		
	}
	function get_related_categories($post_id)
	{
		$category = array();
		
		$this->db->where('id_post',$post_id);
		$query = $this->db->get('tbl_blog'); // get category id related to the post
		
		foreach($query->result() as $row)
		{
			$this->db->where('id_kategori',$row->id_kategori);
			$query = $this->db->get('tbl_kategori'); // get category details
			$category = array_merge($category,$query->result());
		}
		
		return $category;
	}
	function get_category_post($slug)
	{
		$list_post = array();
		
		$this->db->where('slug',$slug);
		$query = $this->db->get('tbl_kategori'); // get category id
		if( $query->num_rows() == 0 )
			show_404();
		
		foreach($query->result() as $category)
		{
			$this->db->where('id_kategori',$category->id_kategori);
			$this->db->order_by('tanggal','desc'); 
			$query = $this->db->get('tbl_blog'); // get posts id which related the category
			$posts = $query->result();
		}
		
		if( isset($posts) && $posts )
		{
			foreach($posts as $post)
			{
				$list_post = array_merge($list_post,$this->get_post($post->id_post)); // get posts and merge them into array
			}		
		}
		
		return $list_post; // return an array of post object
	}
	
	


}
