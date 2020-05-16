<?php
require 'function.php';

$json = [];
$json['error'] = FALSE;

$_code = 200;
$_method = $_SERVER['REQUEST_METHOD'];

if ($_method  == 'POST'):

    //işlem

elseif ($_method  == 'GET'):

    //işlem

elseif ($_method  == 'PUT'):

    //işlem

elseif ($_method  == 'DELETE'):

    //işlem

else:

    $json['error'] = TRUE;
    $json['message'] = $_method . ' yöntemi kullanılamaz.';

endif;

set_header($_code);
echo json_encode($json, JSON_UNESCAPED_UNICODE);
