<?php

function connectDB($host, $username, $password, $db) {
	$connect = mysql_connect($host, $username, $password);
	mysql_set_charset('utf8', $connect);
	mysql_select_db($db, $connect);
	
}
function login($username, $password) {
	 $query = mysql_query("SELECT id_user, username FROM users WHERE username = '".
	mysql_real_escape_string($username) ."' AND password = '" . sha1($password . 'BlogVeronik') . "'") OR DIE(mysql_error());
	
	$row = mysql_fetch_assoc($query);
	
	if ($row !== false) {
		return $row;
		}
		return false;
}