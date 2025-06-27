<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
    <h2>Welcome, <?= htmlspecialchars($_SESSION['user']['username']) ?>!</h2>
    <p>You are logged in with email: <?= htmlspecialchars($_SESSION['user']['email']) ?></p>
    <a href="logout.php"><button>Logout</button></a>
</div>
</body>
</html>