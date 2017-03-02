<?php
	 
	class Peserta_model extends MY_Model
	{	


	// 	function __construct(){
	// 	parent::__construct();
	// 	$this->load->database();

	// 	$this->table = 'peserta'; 
	// }

	// 	public function getform(){
			
	//         $username = $this->session->userdata['user_data']['username'];
	// 		 return $this->db->get_where('peserta',array('username' => $username))->row();
	// 	}
	 	 
	//  function update($username, $data){
	// 	$this->db->where('username', $username);
	// 	return $this->db->update($this->table, $data);
	// }

		public function __construct() {
			parent:: __construct();
			$this->data['table_name'] 	= 'peserta';
			$this->data['primary_key']	= 'uid';
			
		}

		public function get_peserta(){
			$this->db->where('role', 'peserta');
			$query = $this->db->get($this->data['table_name']);
			return $query->result();
		}

		public function cek_username($username)
		{
			$this->db->where('username', $username);
			$query = $this->db->get($this->data['table_name']);
			return $query->result();
		}

		public function updt($username, $data) {
			$this->db->where(['username' => $username]);
			return $this->db->update($this->data['table_name'], $data);
		}
	}

?>