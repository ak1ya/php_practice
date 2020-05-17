<?php

$zipcode1 = '111-0002';
$zipcode2 = '111-601';

$result1 = preg_match('/\A([0-9]{3})-([0-9]{4})\z/', $zipcode1);
$result2 = preg_match('/\A([0-9]{3})-([0-9]{4})\z/', $zipcode2);

var_dump($result1);
var_dump($result2);

?>
