/* Авторизация */

$('.btn-auth').click(function (e) 
{
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pass = $('input[name="pass"]').val();

    $.ajax({
        url: 'vendor/login.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            pass: pass
        },
        success (data) {
            if (data.status) {
                document.location.href = 'profile.php';
            } else 
            {
                if (data.type === 1) {
                    data.fields.forEach(function (fields) {
                        $(`input[name="${fields}"]`).addClass('error');                   
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});

$('.btn-reg').click(function (e) 
{
    e.preventDefault();

    $(`input`).removeClass('error');

    let login = $('input[name="login"]').val(),
        pass = $('input[name="pass"]').val();
        password_confirm = $('input[name="password_confirm"]').val();
        email = $('input[name="email"]').val();
        username = $('input[name="username"]').val();

    $.ajax({
        url: 'vendor/signup.php',
        type: 'POST',
        dataType: 'json',
        data: {
            login: login,
            pass: pass,
            password_confirm: password_confirm,
            email: email,
            username: username
        },
        success (data) {
            if (data.status) {
                document.location.href = 'index.php';
            } else 
            {
                if (data.type === 1) {
                    data.fields.forEach(function (fields) {
                        $(`input[name="${fields}"]`).addClass('error');                   
                    });
                }
                $('.msg').removeClass('none').text(data.message);
            }
        }
    });
});
