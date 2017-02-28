<?php
	class login extends CI_Controller
	{
		public function __construct(){
			parent::__construct(); 
 			

		 }
	 
		 
		public function user_validate(){
			$this->load->model('user_model');
			$query = $this->user_model->validate();
			echo $query;
			if($query == 1 ) { 
				$user = $this->db->get_where('peserta',array('username' => $this->input->post('username')))->row();

				$data = array(
					'username' => $user->username,
					'role' =>  $user->role,
					'logged' => true
				);
				$this->session->set_userdata('user_data',$data);


				if ($user->role == 'Admin'){
					redirect('admin'.'/');
				} else if ($user->role == 'Panitia'){
					redirect('panitia'.'/');
				} else{
					redirect('peserta'.'/');
				}
 
			} 

			else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger">NIM/Password Salah!</div>');
				redirect('sign');
			}
		}

		public function create_user(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('username','','trim|required|is_unique[peserta.username.'.$username.']');
			$this->form_validation->set_rules('password','','trim|required|min_length[8]|max_length[22]');
			$this->form_validation->set_rules('repassword','','trim|matches[password]');
		
			if ($this->form_validation->run() == FALSE){
				 
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.validation_errors().'</div>');
						redirect('sign');
				
			} else {
				$this->load->model('user_model');
				if($query = $this->user_model->create_peserta()){

					$this->session->set_flashdata('msg', '<div class="alert alert-success">Daftar Berhasil,Silahkan Login!</div>');
						redirect('sign');
				}
			}
		}

	}

?>	