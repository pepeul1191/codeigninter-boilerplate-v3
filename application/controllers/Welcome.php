<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		var_dump($this->config->item('constants'));
		$this->load->view('welcome_message');
	}
}
