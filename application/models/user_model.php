<?php
	 
	class User_model extends MY_Model
	{	
		public $rows = 0;

		public function __construct() {
			parent:: __construct();
			$this->load->model('Peserta_model');
		}

		public function cek_login($data){
			$data = $this->Peserta_model->get_data_byConditional($data);
			if($data->num_rows() == 1){
				 $this->rows = $data->num_rows();
			}
			return $this->rows;
		}


		// public function _construct(){

		// 	$this->load->database();
				
		// } 
		// public function get_perserta(){
 
		// 	$query = $this->db->get('peserta');
		// 	return $query->result_array();
		// }

		// public function get_panitia(){
		// 	$this->db->where('role', 'Panitia');
		// 	$query = $this->db->get('users');
		// 	return $query->result_array();
		// }

		//  function validate(){
		//  	$this->db->where('username', $this->input->post('username'));
		//  	$this->db->where('password', $this->input->post('password'));
		//  	$query = $this->db->get('peserta');
 	// 		return $this->db->affected_rows($query);	

		//  }
		// public function getform(){
			
	 //        $username = $this->session->userdata['user_data']['username'];
		// 	 return $this->db->get_where('peserta',array('username' => $username))->row();
		// }

		//  function create_peserta(){
		//  	$new_peserta_insert_data = array(
		//  			'username' => $this->input->post('username'),
		//  			'password' => $this->input->post('password') 
		//  		);
		//  	$insert = $this->db->insert('peserta', $new_peserta_insert_data); 
		//  	return $insert;
		//  }

	}

?>