<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model
{
	public function get_user()
	{   
		$this->db->select('*');
		$this->db->from('user');
		$ambil = $this->db->get();
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
		
	function insert_user($data)
	{	
	$q=$this->db->insert('user',$data);
	$this->db->close();
	return $q;
	}
	
	function get_role()
	{
	$this->db->order_by("id","ASC");
	return $this->db->get("cibb_roles");
	$this->db->close();
	}
	
	function get_row_user($id)
	{	
	$q=$this->db->query("
	select * from user where id_user='$id'
	");
	$this->db->close();
	return $q;
	}
	
    


	
}