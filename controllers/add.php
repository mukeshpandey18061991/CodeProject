<?php
class add extends CI_Controller
{
	function index()
	{
		$a=100;
		$b=300;
		$c=$a+$b;
		$data['res']=$c;
		$this->load->view('addview',$data);
	}
}




?>