<?php


class Reg extends CI_Controller
{
	function index()
	{
	  $this->form_validation->set_rules('txtuser','username','required');
      $this->form_validation->set_rules('txtpass','password','required');
      $this->form_validation->set_rules('txtemail','email','required|valid_email');
      $this->form_validation->set_rules('txtmobile','mobile','required|numeric|exact_length[10]');



         if($this->form_validation->run()==False)
        {
       $this->load->view('regview');
         }
         else
         {
          echo "success";
         }


     } 



}

?>