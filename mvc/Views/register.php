<!DOCTYPE html>

<html lang="en">

 

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./public/style/register.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Đăng ký</title>

</head>

 

<body>

    <div class="main-register">

 

        <div class="app">

            <h3 class="title-register">Đăng ký</h3>

            

            <div class="form-register">

                <form action="" method="post" enctype="multipart/form-data">

 

                    <div class="list-role-register">

                        <div class="wrap">

                            <input class="item-role-register" type="radio" name="role" id=""

                                value="student">

                            <label for="">Học Sinh</label>

                        </div>

 

                        <div class="wrap">

                            <input class="item-role-register2" type="radio" name="role" id=""

                                value="teacher"><label for="">Giảng Viên</label>

                        </div>

                    </div>

 

                    <input type="text" title="Tên hiển thị" name="displayname" id="" placeholder="Tên hiển thị">

                    <input type="email" title="Email" name="email" id="" placeholder="Email">

                    <input type="password" title="Mật khẩu" name="pass" id="" placeholder="Mật khẩu">

                    <input type="password" title="Nhập lại mật khẩu" name="repass" id="" placeholder="Nhập lại mật khẩu">

                    <input class="file" type="file" name="avatar" id="">
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
 

                    <input class="btn active" type="submit" value="Đăng ký" name="register-submit">

                </form>

            </div>

            <p class="register-nav-login">Bạn đã có tài khoản? <a href="login">Đăng nhập</a></p>

        </div>

 

    </div>

</body>

 

</html>