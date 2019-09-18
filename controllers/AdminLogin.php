<?php

class AdminLogin extends CI_Controller
{
	function __construct()
	   {
		parent::__construct();
		$this->load->model('AdminLoginModel');
	   }
	function index()
	{
      $this->load->view('adminloginview');
	}
	function login()
	{
       $user = $this->input->post("txtuser");
       $pass = $this->input->post("txtpass");
       $res=$this->AdminLoginModel->loginmodel($user,$pass);
       if(count($res)>0)
       {
       	echo "Login Successfully";
       }
       else
       {
       	echo "Problem in Login";
       }
	}
}


?>