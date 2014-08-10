<?php
class blog_model extends CI_Model {

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
	
	public function del_post($id)
	{
		$this->db->delete('tbl_blog', array('id_post' => $id)); 
	}
	
	
	public function get_post($limit)
	{
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_blog.id_kategori order by tbl_blog.id_post DESC LIMIT '.$limit.', 30 ');
		$query = $this->db->get();
		return $query->result_array();	
	}
	
	public function get_post_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_blog.id_kategori ');
		$this->db->where('tbl_blog.id_post',$id);
		$query = $this->db->get();
		return $query->row_array();	
	}

	
	public function get_kategori_blog()
	{		
		$ambil = $this->db->query("
		select tbl_kategori.id_kategori, count(tbl_blog.id_kategori) as jml_kategori, nama_kategori, slug from tbl_kategori left outer join tbl_blog
on tbl_blog.id_kategori = tbl_kategori.id_kategori 
group by tbl_kategori.id_kategori 
order by tbl_kategori.id_kategori ASC
		");
			if ($ambil->num_rows() > 0) {
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
			$this->db->close();				
				return $hasil;			
			}
	}
	
	public function get_kategori_blog_by_id($id)
	{		
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->where('id_kategori',$id);
		$this->db->order_by('id_kategori','DESC');
		$query = $this->db->get();
		return $query->row_array();	
	}
	
	public function search_post($str)
	{
		$this->db->select('*');
		$this->db->from('tbl_blog');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_blog.id_kategori');
		$this->db->or_like('tbl_blog.id_post',$str);
		$this->db->or_like('tbl_blog.judul_blog',$str);
		$this->db->or_like('tbl_blog.isi',$str);
		$this->db->order_by('id_post','desc');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	
	public function add_post()
	{
	
		$data = array(
			'id_kategori'	=>  $_POST['kategori'],
			'judul'			=>  $_POST['judul'],
			'isi'			=>  $_POST['isi'],
			'status'		=>  $_POST['status']
		);
		$data['uri'] = $this->slug->create_uri($data);
		$this->db->insert('tbl_blog', $data); 
		$id = $this->db->insert_id();
		$this->session->set_flashdata('message','blog berhasil disimpan!');
		redirect('/blog/post_success/'.$id);
		
	}	
	
	public function update_post($id)
	{
	
		$data = array(
			'id_kategori'   =>  $_POST['kategori'],
			'judul'         =>  $_POST['judul'],
			'isi'           =>  $_POST['isi'],
			'status'        =>  $_POST['status']
		);
		$data['uri'] = $this->slug->create_uri($data);
		$this->db->where('id_post', $id);
		$this->db->update('tbl_blog', $data); 
	
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
	public function del_kategori($id)
	{
		$this->db->delete('tbl_kategori', array('id_kategori' => $id)); 
	}
	

	
	
}


?>
