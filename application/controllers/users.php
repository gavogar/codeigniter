<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Users extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('users_model');
		}	

		function index()
		{			
			$data['users'] = $this->users_model->getUsers();
	        $this->load->view('headers');
	        $this->load->view('users', $data);			
		}
	}
?>