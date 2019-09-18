<?php
class multi extends CI_Controller
{
	function index()
	{
		$a= 50;
		$b= 5;
		$c=$a*$b;
		$data['res']=$c;
		$this->load->view('multi',$data);
	}
}


?>