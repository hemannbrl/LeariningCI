<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$this->load->view('public/admin_login');
	}

	public function admin_login()
	{
		echo "login function";	
	}
}
