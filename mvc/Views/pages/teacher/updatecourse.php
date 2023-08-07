<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật khóa học</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./public/style/update-playlist1.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Tên Khóa học</label>
                        <input type="text" id="video_name" name="video_name" maxlength="100" required>
                    </div>


                    <div class="form-group">
                        <label for="video_file">Chọn ảnh nền cho danh sách phát</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="video_file" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Cập nhật khóa học" class="btn">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>