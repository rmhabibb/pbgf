<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
 
	class Admin extends CI_Controller
	{	
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
			$this->load->helper('url_helper');

			$logged = $this->session->userdata('user_data');
			$user_role = $this->session->userdata['user_data']['role'];
			if (!isset($logged)){
			   redirect('sign');
			} else if (isset($logged) && $user_role == 'Panitia'){
				redirect('Panitia');
			} else if (isset($logged) && $user_role == 'Peserta'){
				redirect('Peserta');
			}
	 	}
 		
 		function logout(){
		$this->session->unset_userdata('user_data');
		redirect('');
		print_r($_SESSION);
		}

 		public function index(){
 			$data['peserta'] = $this->user_model->get_perserta();
 			$this->load->view('includes/header');  
 			$this->load->view('pages/daftar_peserta',$data); 
 			$this->load->view('includes/footer'); 
		}

 		public function daftar_peserta(){
 			$data['peserta'] = $this->user_model->get_perserta();
 			$this->load->view('includes/header');  
 			$this->load->view('pages/daftar_peserta',$data); 
 			$this->load->view('includes/footer'); 
		}

		public function daftar_panitia(){
 			$data['peserta'] = $this->user_model->get_panitia();
 			$this->load->view('includes/header');  
 			$this->load->view('pages/daftar_panitia',$data); 
 			$this->load->view('includes/footer'); 
		}	

		public function create_panitia(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'required'); 
			$this->form_validation->set_rules('password', 'password', 'required'); 
 			$this->load->view('includes/header');  
 			$this->load->view('pages/create_panitia'); 
 			$this->load->view('includes/footer'); 
		}	
 	}

?>