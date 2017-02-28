<?php
	 
	class formulir_model extends CI_Model
	{	


		function __construct(){
		parent::__construct();
		$this->load->database();

		$this->table = 'peserta'; 
	}

		public function getform(){
			
	        $username = $this->session->userdata['user_data']['username'];
			 return $this->db->get_where('peserta',array('username' => $username))->row();
		}
	 	 
	 function update($username, $data){
		$this->db->where('username', $username);
		return $this->db->update($this->table, $data);
	}

	}

?>