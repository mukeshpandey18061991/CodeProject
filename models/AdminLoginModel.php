<?php
class AdminLoginModel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function loginmodel($user,$pass)
	{
		$res=$this->db->get_where('tbl_admin' ,array("username"=>$user,"password"=>$pass));
		return $res->result_array();
	}
}


?>