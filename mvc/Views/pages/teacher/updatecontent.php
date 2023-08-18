<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật video</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/update-content.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Tên Video</label>
                        <input type="text" id="video_name" name="updateVideoName" maxlength="100">
                    </div>


                    <select name="course" class="select-option" required>
                        <option value="" disabled selected><span>--Chọn khoá học--</span></option>
                        <?php 
                            require_once "./mvc/Models/course.php";
                            $course = new course();
                            $id_user = $_SESSION['user']['id'];
                            $tests = $course->showCourseByTeacher($id_user);
                            foreach ($tests as $test) {
                                echo $this->showCourseListByTeacherId($test['name'], $test['id']);
                            }
                        ?>
                    </select>



                    <div class="form-group">
                        <label for="video_file">Chọn ảnh nền cho video</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="updateThumbnailVideo">
                    </div>

                    <div class="form-group">
                        <label for="video_file">Tải video</label>
                        <input class="file-main-playlist" type="file" accept="video/*" id="video_file" name="updateVideoPath">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Cập nhật video" class="btn" name="updatevideo-submit"">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>