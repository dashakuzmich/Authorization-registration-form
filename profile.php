<?php
    session_start();

    if (!$_SESSION['user'])
    {
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Профиль</title>
</head>
<body>
    <form>
        <h1><?= $_SESSION['user']['username'] ?>, hello!</h1>
        <p><a href="vendor/logout.php" class="logout">Выход</a></p>
    </form>
</body>
</html>