<?php  

class My_Model extends CI_Model{
	protected $data = [];
	public function __construct()
	{
		parent::__construct();
	}

	function get_data_byConditional($data){
		$this->db->where($data);
		$query = $this->db->get($this->data['table_name']);
		return $query;
	}

	public function get_row($username){
		$this->db->where('username', $username);
		$query = $this->db->get($this->data['table_name']);
		return $query->row();
	}

	public function get_role($username) {
		$this->db->where('username', $username);
		$query = $this->db->get($this->data['table_name']);
		return $query->row()->role;
	}

	public function update($pk, $data)
	{
		$this->db->where('username', $pk);
		return $this->db->update($this->data['table_name'], $data);
	}

	function insert($data){
		return $this->db->insert($this->data['table_name'], $data);
	}
}

?>