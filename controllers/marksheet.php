<?php
class marksheet extends CI_Controller
{
	function index()
	{
	    $this->load->view('marksheet');
    }
    function marksheetlogic();
    {
    	$a = $this->input->post('txtnum1');
    	$b = $this->input->post('txtnum2');
    	
    	 if($this->input->post('btnsubmit')<=33;)
    	 { 
    	 	echo 'suply';
    	 }
    	 else{
    	 	echo 'pass';
    	 }
    	  $data['a1']=$a;
   	      $data['b1']=$b;

   	      $this->load->view('marksheet',$data);
    }

}


?>