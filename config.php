<?php
$conn = new mysqli("localhost", "root", "", "sit_in_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>