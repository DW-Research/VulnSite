<?php
if (isset($_GET['action']) && isset($_GET['amount'])) {
    $action = $_GET['action'];
    $amount = $_GET['amount'];

    // Perform action (for demonstration purposes only)
    echo "Action: $action, Amount: $amount";
}
?>
