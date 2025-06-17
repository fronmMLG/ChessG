<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "chessapp";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
