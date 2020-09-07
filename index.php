<?php

require "vendor/autoload.php";

$auth = new \Hiraya\Auth('f390aa922fb842b0b16f2af138fed40e', '78a2eBF2cD5843A58B682b6DbAc1B3fa');

echo "<pre>";
print_r($auth->token);
echo "</pre>";

exit;
