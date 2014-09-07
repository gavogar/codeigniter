<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Users_model extends CI_Model {
		
		function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();
		}
		
		function getUsers()
		{
			$query = $this->db->get('users');
			return $query->result();
		}
	}
	
	/* End of file users.php */
	/* Location: ./application/models/users.php */

 ?>