<?php
class profitpersent extends CI_Controller
{
	function index()
	{
		$cp=500;
		$p=50;
		$prp=($p*100)/$cp;
		$data['res'] = $prp;
		$this->load->view('profitpersent',$data);
	}
}
?>