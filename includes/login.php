<?php

session_start();

include('db.php');

$login = mysql_query("SELECT * FROM user WHERE (user = '" . mysql_real_escape_string($_POST['username']) . "') and (pwd = '" . mysql_real_escape_string(md5($_POST['password'])) . "')");

if (mysql_num_rows($login) == 1) {
$_SESSION['username'] = $_POST['username'];
header('Location: index.php');
}
else {
header('Location: index.php');
}
?>