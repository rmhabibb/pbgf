<?php

	 	
	class Site extends CI_Controller
	{
		 
		 public function __construct(){
			parent::__construct();
			   $logged = $this->session->userdata('user_data');
     
      if (isset($logged)){
         $user_role = $this->session->userdata['user_data']['role'];  
          if ($user_role == 'Admin'){
               redirect('admin'.'/');
          } else if ($user_role == 'Peserta'){
               redirect('peserta'.'/');
             } else if ($user_role == 'Panitia'){
               redirect('panitia'.'/');
             }
      } 
			
		 }

		public function index(){
			 $data = [
 				'title'		=> 'Home',
 				'content'	=> 'pages/dashboard'
 			];
 			$this->load->view('includes/templates', $data); 
		}

		public function view ($page = 'dashboard'){ 

			$this->load->helper('url');
			if (!file_exists(APPPATH."views/pages/".$page.".php")){
				show_404();
			}
			 $this->load->view('includes/header'); 
			 $this->load->view('pages/'.$page); 
			 $this->load->view('includes/footer'); 
		}
 
	}
  
?>