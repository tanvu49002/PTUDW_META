<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật trang cá nhân</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./public/style/update-profile1.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Họ và tên</label>
                        <input type="text" id="video_name" name="video_name" maxlength="100" required>
                    </div>

                    <div class="form-group">
                        <label for="video_name">Email</label>
                        <input type="email" id="video_name" name="video_name" maxlength="100" required>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label style="margin-top: 9px" for="video_file">Mật khẩu cũ</label>
                        <input type="password" name="old_pass" maxlength="20" class="box" required>
                    </div>

                    <div class="form-group">
                        <label for="video_file">Mật khẩu mới</label>
                        <input type="password" name="old_pass" maxlength="20" class="box" required>
                    </div>

                    <div class="form-group">
                        <label for="video_file">Nhập lại mật khẩu mới</label>
                        <input type="password" name="old_pass" maxlength="20" class="box" required>
                    </div>

                    <div class="form-group">
                        <label for="video_file">Chọn ảnh ảnh đại diện</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="video_file" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Cập nhật trang cá nhân" class="btn">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>