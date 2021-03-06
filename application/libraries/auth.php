<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Auth library
 *
 * @author	Anggy Trisnawan
 */
class Auth{
	var $CI = NULL;
	function __construct()
	{
		// get CI's object
		$this->CI =& get_instance();
	}
	// untuk validasi login
	function do_login($username,$password)
	{
		// cek di database, ada ga?
		$this->CI->db->from('user');
		$this->CI->db->where('blokir','N');
		$this->CI->db->where('username',$username);
		$this->CI->db->where('password=MD5("'.$password.'")','',false);
		$result = $this->CI->db->get();
		if($result->num_rows() == 0) 
		{
			// username dan password tsb tidak ada 
			return false;
		}
		else	
		{
			// ada, maka ambil informasi dari database
			$userdata = $result->row();
			$session_data = array(
				'id_user'	=> $userdata->id_user,
				'nama'		=> $userdata->nama,
				'level'		=> $userdata->level,
				'username'	=> $userdata->username,
				'password'	=> $userdata->password,
				'email'	=> $userdata->email,
				'cibb_user_id' => $userdata->id_user,
			
			
			);
			// buat session
			$this->CI->session->set_userdata($session_data);
			return true;
		}
	}
	// untuk mengecek apakah user sudah login/belum
	function is_logged_in()
	{
		if($this->CI->session->userdata('id_user') == '')
		{
			return false;
		}
		return true;
	}
	// untuk validasi di setiap halaman yang mengharuskan authentikasi
	function restrict()
	{
		if($this->is_logged_in() == false)
		{
			redirect('blog/home/login');
		}
	}
	// untuk mengecek menu
	function cek_menu($idmenu)
	{
		$this->CI->load->model('usermodel');
		$status_user = $this->CI->session->userdata('level');
		$allowed_level = $this->CI->usermodel->get_array_menu($idmenu);
		if(in_array($status_user,$allowed_level) == false)
		{
			die("Maaf, Anda tidak berhak untuk mengakses halaman ini.");
		}
	}
	// untuk logout
	function do_logout()
	{
		$this->CI->session->sess_destroy();	
	}
}