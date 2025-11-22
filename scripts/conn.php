<?php
$conn = new mysqli('localhost', 'root', '', 'cuphead');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>