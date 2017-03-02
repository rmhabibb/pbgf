<?php
	class Login extends CI_Controller
	{
		public function __construct(){
			parent::__construct(); 
			$this->load->model('user_model');
		 }


		public function index(){
			$data = [
 				'title'		=> 'Login | ',
 				'content'	=> 'pages/sign'
 			];
 			$this->load->view('includes/templates', $data);  
		}
	 
		 
		public function user_validate(){
			// $this->load->model('user_model');
			// $query = $this->user_model->validate();
			// echo $query;
			// if($query == 1 ) { 
			// 	$user = $this->db->get_where('peserta',array('username' => $this->input->post('username')))->row();

			// 	$data = array(
			// 		'username' => $user->username,
			// 		'role' =>  $user->role,
			// 		'logged' => true
			// 	);
			// 	$this->session->set_userdata('user_data',$data);


			// 	if ($user->role == 'admin'){
			// 		redirect('admin'.'/');
			// 	} else if ($user->role == 'Panitia'){
			// 		redirect('panitia'.'/');
			// 	} else{
			// 		redirect('peserta'.'/');
			// 	}
 
			// } 

			// else {
			// 	$this->session->set_flashdata('msg', '<div class="alert alert-danger">username/Password Salah!</div>');
			// 	redirect('sign');
			// }


			if($this->input->post('login')){
				$username 		= $this->input->post('username');
				$password 		= $this->input->post('password');
				$data = array(
					'username'		=> $username,
					'password'		=> md5($password)
				);

				if(isset($username)AND isset($password)){
					$data = $this->user_model->cek_login($data);
					if($data == 1){	
						$role = $this->Peserta_model->get_role($username);		
						if($role == 'peserta'){
							$this->session->set_userdata('username', $username);
							$this->session->set_userdata('role', $role);
							redirect('Peserta');
							exit;
						} elseif($role == 'admin') {
							$this->session->set_userdata('username', $username);
							$this->session->set_userdata('role', $role);
							redirect('Admin');
							exit;
						} elseif($role == 'super admin'){
							$this->session->set_userdata('username', $username);
							$this->session->set_userdata('role', $role);
							redirect('super_admin');
							exit;
						} 
					} else {
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Akun anda tidak benar!</div>');
						redirect('login');
						exit;
					}
				} else {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" style="text-align:center;">Gagal masuk!</div>');
					redirect('login');
					exit;
				}
			}
			$data = array(
				'title'		=> 'Login | ',
				'content'	=> 'pages/sign'
			);
			$this->load->view('includes/templates', $data);
		}

		public function create_user(){
			$this->load->library('form_validation');

			$this->form_validation->set_rules('password1','','trim|required|min_length[8]|max_length[22]');
			$this->form_validation->set_rules('password2','','trim|matches[password1]');
		
			if ($this->form_validation->run() == FALSE){
				 
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">'.validation_errors().'</div>');
						redirect('login');
				
			} else {
				// $this->load->model('user_model');
				// if($query = $this->user_model->create_peserta()){

				// 	$this->session->set_flashdata('msg', '<div class="alert alert-success">Daftar Berhasil,Silahkan Login!</div>');
				// 		redirect('sign');
				// }
				if($this->input->post('regist')){
					// cek username jika sudah daftar

					$cek_data = $this->Peserta_model->cek_username($this->input->post('username'));

					if(count($cek_data) > 0){
						$this->session->set_flashdata('msg', '<div class="alert alert-danger">Anda sudah mendaftar sebelumnya!</div>');
						redirect('login');
						exit;
					} else {
						if($this->input->post('password1') == $this->input->post('password2')){
							$input= array(
								'username'	=> strip_tags($this->input->post('username')),
								'password'	=> md5($this->input->post('password1')),
								'role'		=> 'peserta'
							);
							$this->Peserta_model->insert($input);
							$this->session->set_flashdata('msg', '<div class="alert alert-success">Anda berhasil mendaftar! Login dan lengkapi data!</div>');
							redirect('login');
							exit;
						} else {
							$this->session->set_flashdata('msg', '<div class="alert alert-danger">Password dan Konfirmasi Password Tidak Sama!</div>');
							redirect('login');
							exit;
						}
					}
				 } else {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger">Registrasi Gagal!</div>');
					redirect('login');
					exit;
				}
			}
		}

	}

?>	