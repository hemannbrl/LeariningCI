<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		
		$this->load->view('public/articles_list');
	}
	
	public function add() {
		echo("av");;;;;;;
	}
}
