<?php
class areaoftriangle extends CI_Controller
{
	function index()
	{
		$b= 20;
		$h= 30;
		$a= ($b*$h)/2;
		$data['res']=$a;
		$this->load->view('areaoftriangle',$data);
	}
}
?>