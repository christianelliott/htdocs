<?php

$hostname = 'localhost';
$dbname = 'wire';
$user = 'wireuser';
$password = 'wireuser';

mysql_connect($hostname, $user, $password) or DIE('Connection to database failed');
mysql_select_db($dbname) or DIE('Unable to select database');

?>