<?php
class sub extends CI_Controller
{
	function index()
	{
		$a=500;
		$b=200;
		$c=$a-$b;
		$data['res']=$c;
		$this->load->view('subview',$data);
	}
}



?>