<?php 

session_start();
$_SESSION = [];
session_unset();
session_destroy();

// delete cookie
setcookie('awal', '', time() - 3600 );
setcookie('keytengah', '', time() - 3600 );




header("Location: login.php");
exit;

?>