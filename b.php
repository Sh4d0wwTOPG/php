<?php
session_start(); 

$value = null;

if (isset($_GET['value'])) {
    $value = $_GET['value'];
} elseif (isset($_POST['value'])) {
    $value = $_POST['value'];
} elseif (isset($_GET['session']) && isset($_SESSION['value'])) {
    $value = $_SESSION['value'];
} elseif (isset($_GET['cookie']) && isset($_COOKIE['value'])) {
    $value = $_COOKIE['value'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.php</title>
</head>
<body>
    <h1>Skript B</h1>
    <p>Přijatá hodnota: <?php echo $value !== null ? $value : "Žádná hodnota nebyla předána"; ?></p>
</body>
</html>
