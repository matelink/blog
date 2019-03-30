<?php
global $link;
define('DB_HOST', '192.168.1.12');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'testbd');
$link = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($link == false)
{
	echo 'Соединение не установлено';
	exit();
}



/*
global $link;
$link = mysqli_connect('192.168.1.12', 'root','','testbd');
if ($link == false)
{
	echo 'Соединение не установлено';
	exit();
}
*/