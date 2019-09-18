<?php
class div1 extends CI_Controller
{
	function index()
	{
		$this->load->view('divview');
	}
	function divlogic()
	{
		$a = $this->input->post('txtnum1');
		$b = $this->input->post('txtnum2');
		$c = $a/$b;
		$data['res']=$c;
		$data['a1'] = $a;
		$data ['b1'] = $b;
		$this->load->view('divview',$data);
	}
} 



?>