<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{
  public function index()
  {
    //load helper
    $this->load->helper('Service');
    //output variables
    $rpta = '';
    $status = 500;
    //DO
    try{
      $rpta = http_departments_list($this->config, 'pepe', 'YcF54fUd4tXyz4oLLzeIvw==', 1);
      $status = 200;
    } catch (Unirest\Exception $e) {
      $temp = explode('::', $e);
      $rpta = $temp[0];
    } catch (StatusErrorException $e){
      $rpta = $e;
    } catch (Exception $e) {
      //echo 'Excepción capturada: ',  $e->getMessage(), "\n";
      $temp = explode('::', $e);
      $rpta = $temp[0];
    }
    //output
    $this->output
      ->set_status_header($status)
      ->set_output($rpta);
  }
}
