<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm video</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/create-content.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Tên Video</label>
                        <input type="text" id="video_name" name="VideoName" maxlength="100" require>
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
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="videothumbnail">
                    </div>

                    <div class="form-group">
                        <label for="video_file">Tải video</label>
                        <input class="file-main-playlist" type="file" accept="video/*" id="" name="contentvideo">
                    </div>
                    <!-- Thêm các trường dữ liệu cho bài tập trắc nghiệm -->
                    <h3>Thêm câu hỏi trắc nghiệm</h3>

                    <div class="form-group">
                        <label for="question">Câu hỏi</label>
                        <input type="text" id="question" name="question">
                    </div>

                    <div class="form-group">
                        <label for="option1">Lựa chọn 1</label>
                        <input type="text" id="option1" name="option1">
                    </div>

                    <div class="form-group">
                        <label for="option2">Lựa chọn 2</label>
                        <input type="text" id="option2" name="option2">
                    </div>

                    <div class="form-group">
                        <label for="option3">Lựa chọn 3</label>
                        <input type="text" id="option3" name="option3">
                    </div>

                    <div class="form-group">
                        <label for="correct_option">Lựa chọn đúng (Nhập số 1-3)</label>
                        <input type="number" id="correct_option" name="correct_option" min="1" max="4">
                    </div>
                    <!-- Kết thúc phần thêm câu hỏi trắc nghiệm -->
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
                    <div class="form-group">
                        <input type="submit" value="Thêm video" class="btn" name="CreateContent">
                    </div>

                    
                </form>

            </section>
        </section>

</body>

</html>