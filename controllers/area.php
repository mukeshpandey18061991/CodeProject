<?php
class area extends CI_Controller
{
	function index()
	{
		$b=40;
		$h=50;
		$a= $b*$h;
		$data['res']=$a;
		$this->load->view('area',$data);
	}
}
?>