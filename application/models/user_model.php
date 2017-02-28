<?php
	 
	class user_model extends CI_Model
	{	


		public function _construct(){

			$this->load->database();
				
		} 
		public function get_perserta(){
 
			$query = $this->db->get('peserta');
			return $query->result_array();
		}

		public function get_panitia(){
			$this->db->where('role', 'Panitia');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		 function validate(){
		 	$this->db->where('username', $this->input->post('username'));
		 	$this->db->where('password', $this->input->post('password'));
		 	$query = $this->db->get('peserta');
 			return $this->db->affected_rows($query);	

		 }
		public function getform(){
			
	        $username = $this->session->userdata['user_data']['username'];
			 return $this->db->get_where('peserta',array('username' => $username))->row();
		}

		 function create_peserta(){
		 	$new_peserta_insert_data = array(
		 			'username' => $this->input->post('username'),
		 			'password' => $this->input->post('password') 
		 		);
		 	$insert = $this->db->insert('peserta', $new_peserta_insert_data); 
		 	return $insert;
		 }

	}

?>