<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./public/style/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Đăng nhập</title>
</head>

<body>
    <div class="main-login">

        <div class="app2">
            <h3 class="title-login">Đăng nhập</h3>

            <div class="form-login">
                <form action="" method="post">
                    <input type="email" title="Email" name="email" id="" placeholder="Email">
                    <input type="password" title="Mật khẩu" name="pass" id="" placeholder="Mật khẩu">
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
                    <a href="#"><i>Quên mật khẩu?</i></a>
                    <input class="btn active" type="submit" value="Đăng nhập" name="login-submit">
                </form>
            </div>
            <p class="register-nav-login">Bạn chưa có tài khoản? <a href="register">Tạo một tài khoản mới</a></p>
        </div>

    </div>
</body>

</html>