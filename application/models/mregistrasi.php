<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mregistrasi extends CI_Model
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
	
	
	function cek_user($username)
	{
	$q=$this->db->query("
	select * from user where username = '$username'
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
	
	function insert_absensi_sp($latitude,$longitude,$id,$provider)
	{	
	$q = $this->db->query("call insert_posisi('$latitude','$longitude','$id','$provider')");
	$this->db->close();
	return $q;
	}
	
        function posisi($data)
	{	
	$q=$this->db->insert('posisi',$data);
	$this->db->close();
	return $q;
	}
	
	function insert_signup($data)
	{	
	$q=$this->db->insert('notif_petugas',$data);
	$this->db->close();
	return $q;
	}
	
	function get_cek($id)
	{
	$Q=$this->db->query("select * from petugas,rayon where id_device='$id' and petugas.id_rayon = rayon.id_rayon");
	if ($Q->num_rows() > 0) {
	return $Q;
	}
	else
	{
	$hasil = "";
	}
	$this->db->close();
	}
	
	function get_konfirmasi($id)
	{
	$Q=$this->db->query("select * from notif_petugas where id_device='$id'");
	if ($Q->num_rows() > 0) {
	return $Q;
	}
	else
	{
	$hasil = "";
	}	
	$this->db->close();
	}

	function get_user_row($id)
	{
	$Q=$this->db->query("select * from user where id_user='$id'");
	$this->db->close();
	return $Q;	
	}
	
	function get_username($id)
	{
	$Q=$this->db->query("select * from petugas where id_device='$id'");
	$this->db->close();
	return $Q;	
	}

function pp($id)
	{
	$Q=$this->db->query("SELECT MAX(waktu) l ,MIN(waktu) s FROM posisi WHERE id_device='$id' and DATE(waktu) = DATE(NOW())");
	$this->db->close();
	return $Q;	
	}

public function get_posisi()
	{   
		$this->db->select('*');
		$this->db->from('posisi');
		$this->db->from('pengguna');
		$this->db->where('posisi.id_device = pengguna.id_device');
		$ambil = $this->db->get();
			if ($ambil->num_rows() > 0) {
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
			$this->db->close();				
				return $hasil;			
			}
	}


	
}