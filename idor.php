<?php
$users = [
    1 => 'Alice',
    2 => 'Bob',
    3 => 'Charlie'
];

if (isset($_GET['userid'])) {
    $userid = $_GET['userid'];

    if (isset($users[$userid])) {
        echo "User ID: $userid, User: " . $users[$userid];
    } else {
        echo "Invalid user ID.";
    }
}
?>


