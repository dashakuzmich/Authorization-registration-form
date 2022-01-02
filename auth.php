<?php
    session_start(); 

    if ($_SESSION['user'])
    {
        header('Location: profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Авторизация</title>
</head>
<body>

    <form>
        <label>Логин</label>
        <input type="text" name="login" id="login" placeholder="Введите логин"><br>
        <label>Пароль</label>
        <input type="password" name="pass" id="pass" placeholder="Введите пароль"><br>
        <button class="btn_auth" type="submit">Войти</button>
        
        <p>
            У вас нет аккаунта? - <a href="reg.php">Зарегистрируйтесь</a>!
        </p>
        <p class="msg none"></p>

    </form>  

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

</body>
</html>