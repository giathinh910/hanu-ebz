<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muser extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getUserWhere($data) {
		return $this->db
			->where($data)
			->get('user')
			->result_array();
	}
	public function createUser($data) {
		return $this->db->insert('user', $data);
	}
}