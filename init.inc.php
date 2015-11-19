<?php
session_start();

$exceptions = array('register', 'login');
$page = substr(end(explode('/', $_SERVER['SCRIPT_NAME'])), 0, -4);

if (in_array($page, $exceptions) === false){
    if(isset($_SESSION['username']) === false){
        header('Location: login.php');
        die();
    }
}

mysql_connect('127.0.0.1', 'example_user', 'example_pass');
mysql_select_db('user_system');

$path = dirname(_FILE_);

include("{$path}/user.inc.php");
?>