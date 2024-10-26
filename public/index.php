<?php
// Tell PHP to show errors (only during development!)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Start a session (we'll need this later for user management)
session_start();

// Basic welcome message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Vault</title>
</head>
<body>
    <h1>Welcome to Recipe Vault</h1>
    <?php
    // Let's test PHP is working
    echo "<p>Today is " . date('Y-m-d H:i:s') . "</p>";
    ?>
</body>
</html>