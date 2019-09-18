


<?php

class div extends CI_Controller
{
	function index()
	{

	
		$a=(500);
		$b=(5);
		$c=$a/$b;
		$data['res']=$c;
		$this->load->view('div',$data);
	}
}
?>