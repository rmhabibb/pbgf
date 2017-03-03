<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
 
	class Admin extends CI_Controller
	{	
		public function __construct(){
			parent::__construct();
			// $this->load->model('user_model');
			// $this->load->helper('url_helper');

			// $logged = $this->session->userdata('user_data');
			// $user_role = $this->session->userdata['user_data']['role'];
			$username = $this->session->userdata('username');
			$role     = $this->session->userdata('role');
			if (!isset($username, $role)){
			   redirect('login');
			   exit;
			}

			if($role != 'admin'){
				redirect('admin/logout');
				exit;
			}
	 		
	 		$this->load->model('peserta_model');
	 	}
 		
 	// 	function logout(){
		// $this->session->unset_userdata('user_data');
		// redirect('');
		// print_r($_SESSION);
		// }

 		public function index(){
 			$data = [
 				'title'		=> 'Daftar Peserta | ',
 				'content'	=> 'pages/dashboard_admin',
 				'peserta'	=> $this->Peserta_model->get_peserta()
 			];
 			$this->load->view('includes/templates', $data);  
		}

		public function hasil(){
			if ($this->input->post('id_peserta')){
				$id_peserta = $this->input->post('id_peserta');
				$peserta 	= $this->peserta_model->get_row($id_peserta);
				
				if (isset($peserta))
				{
					if ($peserta->status == 'lulus')
					{
						// echo "hay";
						// exit;
						$this->peserta_model->updt($id_peserta, ['status' => 'tidak lulus']);
						echo '<button class="btn btn-danger" onclick="changeStatus(\''.$id_peserta.'\')"><i class="fa fa-close"></i> Tidak Lulus</button>';
					}
					else
					{
						//echo "hoy"; exit;
						$this->peserta_model->updt($id_peserta, ['status' => 'lulus']);
						echo '<button class="btn btn-success" onclick="changeStatus(\''.$id_peserta.'\')"><i class="fa fa-check"></i> Lulus</button>';	
					}
				 }
			}
		}

 	// 	public function daftar_peserta(){
 	// 		$data['peserta'] = $this->user_model->get_perserta();
 	// 		$this->load->view('includes/header');  
 	// 		$this->load->view('pages/daftar_peserta',$data); 
 	// 		$this->load->view('includes/footer'); 
		// }

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

		public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}	
 	}

?>