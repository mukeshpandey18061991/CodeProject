<?php

 class UserModel extends CI_Model
 {
 	function add_user($data)
	{
		//get the data from controller and insert into the table 'users'
		return $this->db->insert('users', $data);
	}
	  function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }
    function login($u,$p)
    {
    	 $res=$this->db->get_where('admin',array('username'=>$u,'password'=>$p));
    	 return $res->num_rows();
    }
 }

?>