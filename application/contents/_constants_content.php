<?php
return
  [
    'base_url' => 'http://localhost:8080/',
    'static_url' => 'http://localhost:8080/public/',
    'ambiente_static' => 'desarrollo',
    'validate_csrf' => 'able',
    'validate_session' => 'able',
    'login' => [
      'usuario' => 'admin',
      'contrasenia' => 'sistema123'
    ],
    'csrf' => [
      'secret' => 'PKBcauXg6sTXz7Ddlty0nejVgoUodXL89KNxcrfwkEme0Huqtj6jjt4fP7v2uF4L',
      'key' => 'csrf_val'
    ],
    'services' => [
      'access' => [
        'url' => 'http://localhost:4100/',
        'csrf_key' => 'csrf_val',
        'csrf_value' => 'PKBcauXg6sTXz7Ddlty0nejVgoUodXL89KNxcrfwkEme0Huqtj6jjt4fP7v2uF4L'
      ],
    ],
  ];
