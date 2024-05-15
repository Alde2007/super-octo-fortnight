<?php
$server   = "localhost";
$username = "root";
$pw       ="";
$datebase = "basetaf";

$conex =new mysql($server, $username, $pw, $gatabase);
if ($conex->connect_error) {
	die()
}
?>