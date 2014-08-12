<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mprofile extends CI_Model
{
	public function get_post_by_user($id)
	{   
		$ambil = $this->db->query("
		select a.id, a.post, b.title, b.slug, a.author_id from cibb_posts a inner join cibb_threads b on a.thread_id=b.id
		where author_id='$id' order by a.date_add DESC
		");
			if ($ambil->num_rows() > 0) {
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
			$this->db->close();				
				return $hasil;			
			}
	}
	
	function hapus_user($id)
	{
	$this->db->delete('user', array('id_user'=> $id));
	$this->db->close();	
	}
	
	function ubah_user($data,$id)
	{
	$Q = $this->db->where('id_user',$id);
	$Q = $this->db->update('user',$data);	
	$this->db->close();	
	return $Q;
	}
	
	
	function cek_user($username)
	{
	$q=$this->db->query("
	select * from user where username = '$username'
	");
	$this->db->close();
	return $q;
	}
	
	function get_data_user($id)
	{
	$q=$this->db->query("
	select * from user where id_user = '$id'
	");
	$this->db->close();
	return $q;
	}
	
	function insert_user($data)
	{	
	$q=$this->db->insert('user',$data);
	$this->db->close();
	return $q;
	}
	
	
	
     


	
}