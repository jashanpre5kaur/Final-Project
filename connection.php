<?php

// Full Database URL
$db_url = "mysql://root:GqiaoqrpulVPKwEGVWAXetuUXqWcRNGb@tramway.proxy.rlwy.net:24025/railway";

// Parse the URL
$parsed_url = parse_url($db_url);

$server = $parsed_url["host"];      // Extract hostname
$username = $parsed_url["user"];    // Extract username
$password = $parsed_url["pass"];    // Extract password
$port = $parsed_url["port"];        // Extract port
$db = ltrim($parsed_url["path"], "/"); // Extract database name

// Connect to MySQL
$conn = new mysqli($server, $username, $password, $db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "database connection is working!";
}

?>
