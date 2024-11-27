<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Welkom, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
    <a href="logout.php">Loguit</a>
</body>
</html>
