<?php

/* Example for adding a multiline script */

require('../routeros_api.class.php');
require('config.php');

$API = new RouterosAPI();

$API->debug = true;

if ($API->connect($router_ip, $username, $password)) {

   $API->comm("/system/script/add", array(
      "name"     => "myscript",
      "source" => ":put line1;
:put line2;",
   ));

   $API->disconnect();

}

?>
