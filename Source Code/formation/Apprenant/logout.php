<?php 
session_start();
unset($_SESSION['id_user_session']);
unset($_SESSION['username_session']);
session_destroy();


define('IN_PHPBB', true);
define('ROOT_PATH', "../Forum");

if (!defined('IN_PHPBB') || !defined('ROOT_PATH')) {
    exit();
}

$phpEx = "php";
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : ROOT_PATH . '/';
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->session_kill();
$user->session_begin();

header("Location: ..\index.php");

?>