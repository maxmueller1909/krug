<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.10.17
 * Time: 13:32


$servername = "mysql5.totosu.de";
$username = "db406399_3";
$password = "19945Frame";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 */

echo "hallo Welt";
?>