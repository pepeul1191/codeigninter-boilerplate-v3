<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller
{
	public function index()
	{
		$this->output->set_status_header(200);
    $this->output->set_output('REST index');
	}
}
