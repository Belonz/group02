<?php

$host = 'mysql';
$username = 'root';
$password = '1q2w3e4r';
$dbname = 'group02db';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    echo "connected";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
