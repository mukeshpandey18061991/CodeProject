<?php

class RegisterModel extends CI_Model
{
	function add_user($data)
	{
		//get the data from controller and insert into the table 'users'
		return $this->db->insert('users', $data);
	}
}

?>