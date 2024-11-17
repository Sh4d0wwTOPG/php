<?php
$randomValue = rand(1, 100);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.php</title>
</head>
<body>
    <h1>Skript A</h1>
    <p>Vygenerovaná hodnota: <?php echo $randomValue; ?></p>

    <h2>Odkazy na b.php</h2>
    <ul>
        <li>
            <a href="b.php?value=<?php echo $randomValue; ?>">Předat hodnotu pomocí GET</a>
        </li>
        <li>
            <form action="b.php" method="POST" style="display:inline;">
                <input type="hidden" name="value" value="<?php echo $randomValue; ?>">
                <button type="submit">Předat hodnotu pomocí POST</button>
            </form>
        </li>
        <li>
            <?php
            session_start();
            $_SESSION['value'] = $randomValue;
            ?>
            <a href="b.php?session=1">Předat hodnotu pomocí SESSION</a>
        </li>
        <li>
            <?php
            setcookie("value", $randomValue, time() + 3600, "/");
            ?>
            <a href="b.php?cookie=1">Předat hodnotu pomocí COOKIE</a>
        </li>
    </ul>
</body>
</html>
