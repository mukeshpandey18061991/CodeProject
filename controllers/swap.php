<?php
class swap extends CI_Controller
{
	function index()
	{
		$this->load->view('swapview');
	}
	function swaplogic()
	{
		$a = $this->input->post('txtnum1');
		$b = $this->input->post('txtnum2');
		echo "Before swap a=$a and b=$b <br>";
		$data['a1']= $a;
		$data['b1']=$b;
		$a = $a +$b;
		$b = $a-$b;
		$a = $a-$b;
		echo "After swap a= $a and b= $b <br>";
		
		$this->load->view('swapview',$data);

	}
}


?>