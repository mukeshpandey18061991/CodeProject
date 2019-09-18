<?php
 class guest extends CI_Controller

 {
 	function index()
 	{
      $this->load->view('header');

       $this->load->view('home');

       $this->load->view('footer');
 	}
  function login()
  {
     $this->load->view('header');

       $this->load->view('AdminLogin');

       $this->load->view('footer');
  }
 	function about()
 	{
        $this->load->view('header');

       $this->load->view('about');

       $this->load->view('footer');
 	}
      function java()
      {
        $this->load->view('header');

       $this->load->view('java');

       $this->load->view('footer');
      }
      function php()
      {
        $this->load->view('header');

       $this->load->view('php');

       $this->load->view('footer');
      }

 	function service()
 	{
       $this->load->view('header');

       $this->load->view('service');

       $this->load->view('footer');
 	}
 	function gallery()
 	{
       $this->load->view('header');

       $this->load->view('gallery');

       $this->load->view('footer');
 	}
 	function contact()
 	{
 		 $this->load->view('header');

       $this->load->view('contact');

       $this->load->view('footer');
 	}
      
 }






?>