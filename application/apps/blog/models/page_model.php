<?php
class page_model extends CI_Model {

	public function __construct()
	{	
		$this->load->database();

		$config = array(
		    'field' => 'uri',
		    'title' => 'judul',
		    'table' => 'tbl_blog',
		    'id' => 'id_post',
		);
		$this->load->library('slug', $config);
	}
	
	function get_slug($slug){
	$q=$this->db->query("select id_page from statis_page where slug='$slug'");
	return $q;
	$this->db->close();
	}
	
	function get_page_id($id){
	$q=$this->db->query("select * from statis_page where id_page='$id'");
	return $q;
	$this->db->close();
	}
	
	function get_detail_page($id)
	{
		$this->db->where('id_page',$id);
		$query = $this->db->get('statis_page');
		if($query->num_rows()!==0)
		{
			return $query->result();
		}
		else
			return FALSE;
	}
	
		public function get_page($limit)
	{
		$this->db->select('*');
		$this->db->from('statis_page');
		$query = $this->db->get();
		return $query->result_array();	
	}
	
	public function add_page()
	{
	
		$data = array(
			'menu_title'	=>  $_POST['menu_title'],
			'slug'			=>  $_POST['slug'],
			'judul'			=>  $_POST['judul'],
			'isi'			=>  $_POST['isi'],
			'status'		=>  $_POST['status']
		);
		$this->db->insert('statis_page', $data); 
		$id = $this->db->insert_id();
		$this->session->set_flashdata('message','blog berhasil disimpan!');
		redirect('blog/page/index');
		
	}	
	
	public function update_page($id)
	{
	
		$data = array(
			'menu_title'	=>  $_POST['menu_title'],
			'slug'			=>  $_POST['slug'],
			'judul'			=>  $_POST['judul'],
			'isi'			=>  $_POST['isi'],
			'status'		=>  $_POST['status']
		);
		
		$this->db->where('id_page', $id);
		$this->db->update('statis_page', $data); 
	
	}	
	public function add_kategori($data)
	{
	$q=$this->db->insert('tbl_kategori',$data);
	$this->db->close();
	return $q;
	
	}	
	public function update_kategori($id)
	{
		$nama_kategori = $this->input->post('nama_kategori');
		$slug=strtolower(str_replace(" ","-",$nama_kategori));
		$data=array('nama_kategori'=>$_POST['nama_kategori'],'slug'=>$slug);
		$this->db->where('id_kategori', $id);
		$this->db->update('tbl_kategori', $data); 
	
	}	
	public function del($id)
	{
		$this->db->delete('statis_page', array('id_page' => $id)); 
	}
	

	
	
}


?>
