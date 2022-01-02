<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $error_fields = [];

    if ($login === '') {
        $error_fields[] = 'login';
    }

    if ($pass === '') {
        $error_fields[] = 'pass';
    }

    if (!empty($error_fields)) {
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];

        echo json_encode($response);
        die();
    }
    $pass = md5($pass);

    $check = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
    if (mysqli_num_rows($check) > 0) {
        
        $user = mysqli_fetch_assoc($check);
        $_SESSION['user'] = 
        [
            "username" => $user['username']
        ];

        $response = [
            "status" => true
        ];

        echo json_encode($response);

    } else 
    {
        $response = [
            "status" => false,
            "message" => 'Не верный логин или пароль'
        ];

        echo json_encode($response);
    }
?>