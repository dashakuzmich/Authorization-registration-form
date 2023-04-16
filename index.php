<?php
    session_start();

    if ($_SESSION['user'])
    {
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Авторизация</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h1>Добро пожаловать!</h1>
                </div>
                <div class="form-auth form">
                    <form>
                        <input type="text" name="login" id="login" placeholder="Логин"><br>
                        <input type="password" name="pass" id="pass" placeholder="Пароль"><br>
                        <button class="btn-auth btn" type="submit">Войти</button>
                        <p>
                            У вас нет аккаунта? - <a href="reg.php">Зарегистрируйтесь!</a>
                        </p>
                        <p class="msg none"></p>
                    </form>
                </div>
            </div>
        </div>    
    </main>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
