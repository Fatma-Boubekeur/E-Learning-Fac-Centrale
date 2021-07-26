<?php
session_start();
$username=$_SESSION['username_session'];
echo $username;


define('IN_PHPBB', true);
define('ROOT_PATH', "../Forum/");

if (!defined('IN_PHPBB') || !defined('ROOT_PATH')) {
    exit();
}

$phpEx = "php";
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : ROOT_PATH . '/';
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$username="admin";
$password="admin123";
$remember=false;
$auth->login($username, $password, $remember, 1, 0);
header("Location: ../Forum");

 ?>