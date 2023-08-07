<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật video</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./public/style/update-content.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Tên Video</label>
                        <input type="text" id="video_name" name="video_name" maxlength="100" required>
                    </div>


                    <select name="playlist" class="select-option" required>
                        <option value="" disabled selected><span>--Chọn danh sách phát--</span></option>
                        <option value="active">active</option>
                        <option value="deactive">deactive</option>
                    </select>



                    <div class="form-group">
                        <label for="video_file">Chọn ảnh nền cho video</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="video_file" required>
                    </div>

                    <div class="form-group">
                        <label for="video_file">Tải video</label>
                        <input class="file-main-playlist" type="file" accept="video/*" id="video_file" name="video_file" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Cập nhật video" class="btn">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>