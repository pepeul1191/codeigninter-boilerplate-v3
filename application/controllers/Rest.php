<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller
{
	public function index()
	{
		$this->output->set_status_header(200);
    $this->output->set_output('REST index');
	}

  public function list()
  {
    $rpta = '';
    $status = 200;
    try {
      $rs = \Model::factory('\Models\Department', 'ubicaciones')
      	->select('id')
      	->select('nombre')
      	->find_array();
      $rpta = json_encode($rs);
    }catch (Exception $e) {
      $status = 500;
      $rpta = json_encode(
        [
          'tipo_mensaje' => 'error',
          'mensaje' => [
  					'No se ha podido listar los departamentos',
  					$e->getMessage()
  				]
        ]
      );
    }
    $this->output
      ->set_status_header($status)
      ->set_output($rpta);
  }

	public function access()
  {
    $rpta = '';
    $status = 200;
    try {
      $rs = \Model::factory('\Models\Access\System', 'access')
      	->select('id')
      	->select('name')
      	->find_array();
      $rpta = json_encode($rs);
    }catch (Exception $e) {
      $status = 500;
      $rpta = json_encode(
        [
          'tipo_mensaje' => 'error',
          'mensaje' => [
  					'No se ha podido listar los sistemas',
  					$e->getMessage()
  				]
        ]
      );
    }
    $this->output
      ->set_status_header($status)
      ->set_output($rpta);
  }
}
