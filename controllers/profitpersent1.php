<?php
class profitpersent1 extends CI_Controller
{
	function index()
	{
		$this->load->view('profitpersent1');
	}
	function profitpersentlogic()
	{
		$a = $this->input->post('txtnum1');
    	$b = $this->input->post('txtnum2');
    	$prp=($b*100)/$a;
		$data['res'] = $prp;
    	$data['a1'] = $a;
    	$data['b1'] = $b;
		$this->load->view('profitpersent1',$data);
	}
}



?>