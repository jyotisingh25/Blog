<?php
$db['db_host']='mysql.hostinger.in';
$db['db_user']='u114896617_jyoti';
$db['db_password']='kavita14';
$db['db_name']='u114896617_cms';

foreach($db as $key => $value){
	define(strtoupper($key), $value);
	
}
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);


?>