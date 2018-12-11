<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		//libraries as filters
		$this->load->library('ViewSessionTrue', array(
			'config' => $this->config,
		));
		$this->load->library('HttpAccess',
			array(
				'config' => $this->config,
				'allow' => ['GET', 'POST'],
				'received' => $this->input->server('REQUEST_METHOD'),
				'instance' => $this,
			)
		);
		//helpers
		$this->load->helper('Wellcome');
		//controller function
		$data_top = array(
			'title' => 'Home',
			'csss' => index_css($this->config),
			'jss' => index_js($this->config),
		);
		$this->load->view('layouts/blank_header', $data_top);
		$this->load->view('wellcome/index');
		$this->load->view('layouts/blank_footer', array());
	}
}
