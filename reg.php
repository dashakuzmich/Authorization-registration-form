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
    <title>Регистрация</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="wrapper">
                <div class="title">
                    <h1>Регистрация</h1>
                </div>
                <div class="form-reg form">
                    <form>
                    <input type="text" name="login" id="login" placeholder="Логин"><br>
                    <input type="password" name="pass" id="pass" placeholder="Пароль"><br>
                    <input type="password" name="password_confirm" id="password_confirm" placeholder="Подтвердите пароль"><br>
                    <input type="email" name="email" id="email" placeholder="Почта"><br>
                    <input type="text" name="username" id="username" placeholder="Имя"><br>
                    <button class="btn-reg btn" type="submit">Регистрация</button>
                    <p>
                        У вас уже есть аккаунт? - <a href="index.php">Авторизуйтесь!</a>
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