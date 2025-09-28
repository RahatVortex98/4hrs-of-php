<?php
$db_server = "localhost"; // Host
$db_user   = "root";      // Username
$db_pass   = "";          // Password (empty in XAMPP/WAMP for root)
$db_name   = "businessdb";// Database name
$conn = "";

// Try to connect
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
}
catch (mysql_sql_exception) {
    echo "Could not connect!";
}

// Check connection
if ($conn) {
    echo "U are connected";
}
?>
