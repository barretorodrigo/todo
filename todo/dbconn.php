<?php

$servername = "localhost";
$username   = "barreto";
$password   = "barreto.2";
$dbname     = "todo";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}
