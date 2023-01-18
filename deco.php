<?php
session_start();
setcookie('login',null,(time()-30));
setcookie('password',null,(time()-30));
$_SESSION['token'] = '';
header('location:motdepasse.php');
?>
