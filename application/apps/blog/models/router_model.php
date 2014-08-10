<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Router_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }  
 
    //grab all of the routes from the database, and cache to a file
    public function cache_routes()
    {
        $file = fopen(APPPATH."cache/routes.php","w");
         
        //Tutorial slugs
        $this->db->select("*");
        $query = $this->db->get("tbl_blog");
 
        foreach ($query->result() as $row)
        {
            $data = '$route["learning/' . $row->uri . '"] = "learning/post/'.$row->id_post.'";'."\n";
            fwrite($file,$data);
        }
 
        fclose($file);
    }
}