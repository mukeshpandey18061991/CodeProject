<?php
class si extends CI_Controller
{
	function index()
	{
		$p=500;
		$r=2;
		$t=2;
		$si=($p*$r*$t)/100;
		$data['res'] = $si;
		$this->load->view('si',$data);
	}
}
?>