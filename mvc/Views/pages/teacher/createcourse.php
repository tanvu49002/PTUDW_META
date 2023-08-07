<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo khóa học</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./public/style/create-playlist.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="CourseName">Tên Khóa học</label>
                        <input type="text" id="video_name" name="CourseName" maxlength="100" required>
                    </div>


                    <div class="form-group">
                        <label for="Thumbnail">Chọn ảnh nền cho danh sách phát</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="Thumbnail" required>
                    </div>
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
                    <div class="form-group">
                        <input type="submit" value="Tạo khóa học" class="btn"   name="CreateCourse">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>