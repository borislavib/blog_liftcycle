<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_db extends CI_Model {
	
	function __construct() {

		parent::__construct();

		$this->load->database();

	} 

	function addIdea($data){

		$this->db->insert('ideas', $data);

	}
}