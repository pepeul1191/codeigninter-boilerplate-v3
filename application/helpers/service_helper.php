<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('http_departments_list'))
{
  function http_departments_list($config, $user, $pass, $system_id)
  {
    $rpta = null;
    try {
      $headers = array(
        'Accept' => 'application/json',
        $config->item('constants')['services']['access']['csrf_key'] => $config->item('constants')['services']['access']['csrf_value'],
      );
      $data = array(
        'user' => $user,
        'pass' => $pass,
        'system_id' => $system_id,
      );
      $body = Unirest\Request\Body::form($data);
      $url =  $config->item('constants')['services']['access']['url'] . 'user/system/validate';
      $resp = Unirest\Request::post($url, $headers, $body);
      if($resp->code != 200){
        throw new StatusErrorException($resp->body);
      }
      $rpta = $resp->body;
    } catch (Unirest\Exception $e) {
      throw new Unirest\Exception('Error de comunicación con el servicio' . '::' . $e->getMessage());
    } catch (Exception $e) {
      throw new Exception('Error no esperado antes de la comunicación con el servicio' . '::' . $e->getMessage());
    }
    return $rpta;
  }
}
