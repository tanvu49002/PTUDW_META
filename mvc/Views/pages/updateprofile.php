<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật trang cá nhân</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/update-profile1.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Tên hiển thị</label>
                        <input type="text" id="video_name" name="update-displayname" maxlength="100" value="<?php echo $_SESSION['user']['displayname'] ?>">
                    </div>

                    <!-- <div class="form-group">
                        <label for="video_name">Email</label>
                        <input type="email" id="video_name" name="video_name" maxlength="100" required>
                    </div> -->

                    <hr>

                    <div class="form-group">
                        <label style="margin-top: 9px" for="video_file">Mật khẩu cũ</label>
                        <input type="password" name="old_pass" maxlength="20" class="box">
                    </div>

                    <div class="form-group">
                        <label for="video_file">Mật khẩu mới</label>
                        <input type="password" name="new_pass" maxlength="20" class="box">
                    </div>

                    <div class="form-group">
                        <label for="video_file">Nhập lại mật khẩu mới</label>
                        <input type="password" name="re_pass" maxlength="20" class="box">
                    </div>

                    <div class="form-group">
                        <label for="video_file">Chọn ảnh đại diện</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="update-avatar">
                    </div>
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
                    <div class="form-group">
                        <input type="submit" value="Cập nhật trang cá nhân" class="btn" name="updateprofile-submit">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>