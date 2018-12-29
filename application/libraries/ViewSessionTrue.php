<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ViewSessionTrue
{
  function __construct($params)
  {
    $continue = true;
		if($params['config']->item('constants')['validate_session'] == 'able'){
      if (array_key_exists('state', $_SESSION)) {
        if($_SESSION['state'] != 'activo'){
          $continue = false;
        }
      }else{
        $continue = false;
      }
      if($continue == false){
        header('Location: ' . $params['config']->item('constants')['base_url'] . 'error/access/505');
        exit();
      }
    }
  }
}
