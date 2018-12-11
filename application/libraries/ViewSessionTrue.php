<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ViewSessionTrue
{
  function __construct($params)
  {
    $continuar = true;
		if($params['config']->item('constants')['ambiente_session'] == 'activo'){
      if (array_key_exists('estado', $_SESSION)) {
        if($_SESSION['estado'] != 'activo'){
          $continuar = false;
        }
      }else{
        $continuar = false;
      }
      if($continuar == false){
        header('Location: ' . $params['config']->item('constants')['base_url'] . 'error/access/505');
        exit();
      }
    }
  }
}
