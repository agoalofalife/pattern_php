<?php

use Pattern\Structural\Proxy\IpProxy;
require_once './vendor/autoload.php';
// start in console
$proxy = new IpProxy('5.212.21.21', 'Jonh');
$proxy->response();