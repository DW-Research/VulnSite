<?php
if (isset($_GET['userid'])) {
    $userid = $_GET['userid'];

    // Simulate database query
    $query = "SELECT * FROM users WHERE id = $userid";
    echo "Query executed: $query"; // For demonstration purposes only
}
?>
