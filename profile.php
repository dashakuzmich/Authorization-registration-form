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
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h1>Привет!, <?=$_SESSION['user']['username'] ?></h1>
                </div>
                <div class="form-auth form">
                    <form>
                        <p><a href="vendor/logout.php" class="btn-out btn">Выход</a></p>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>