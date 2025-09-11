<?php
session_start();
include "../../dbConnection.php";

if (!isset($_SESSION['user_id'])) {
    echo "<p>Please log in to view profile.</p>";
    exit;
}

$userId = intval($_SESSION['user_id']);
$sql = "SELECT * FROM users WHERE id=$userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo "
    <div class='profileCard'>
        <h2>My Profile</h2>
        <p><b>Real Name:</b> ".$user['realname']."</p>
        <p><b>Username:</b> ".$user['username']."</p>
        <p><b>Email:</b> ".$user['email']."</p>
        <p><b>Phone:</b> ".$user['phone']."</p>
        <button onclick='alert(\"Edit feature coming soon\")'>Edit</button>
        <button onclick='alert(\"Delete feature coming soon\")'>Delete</button>
    </div>
    ";
} else {
    echo "<p>Profile not found.</p>";
}
?>
