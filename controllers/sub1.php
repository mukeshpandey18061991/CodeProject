<?php
class sub1 extends CI_Controller
{
	function index()
	{
		$this->load->view('subview1');
	}
	function sublogic()

	{
		$a = $this->input->post('txtnum1');
		$b = $this->input->post('txtnum2');
		$c = $a-$b;
		$data['res']=$c;
		$data['a1'] =$a;
		$data ['b1']= $b;
		$this->load->view('subview1',$data);
	}
}



?>