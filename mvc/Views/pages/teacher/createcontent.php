<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật video</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./public/style/create-content.css">
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
                        <input class="file-main-playlist" type="file" accept="video/*" id="video_file" name="video_file"
                            required>
                    </div>
                    <!-- Thêm các trường dữ liệu cho bài tập trắc nghiệm -->
                    <h3>Thêm câu hỏi trắc nghiệm</h3>

                    <div class="form-group">
                        <label for="question">Câu hỏi</label>
                        <input type="text" id="question" name="question" required>
                    </div>

                    <div class="form-group">
                        <label for="option1">Lựa chọn 1</label>
                        <input type="text" id="option1" name="option1" required>
                    </div>

                    <div class="form-group">
                        <label for="option2">Lựa chọn 2</label>
                        <input type="text" id="option2" name="option2" required>
                    </div>

                    <div class="form-group">
                        <label for="option3">Lựa chọn 3</label>
                        <input type="text" id="option3" name="option3" required>
                    </div>

                    <div class="form-group">
                        <label for="correct_option">Lựa chọn đúng (Nhập số 1-4)</label>
                        <input type="number" id="correct_option" name="correct_option" min="1" max="4" required>
                    </div>
                    <!-- Kết thúc phần thêm câu hỏi trắc nghiệm -->

                    <div class="form-group">
                        <input type="submit" value="Tạo video" class="btn">
                    </div>

                    
                </form>

            </section>
        </section>

</body>

</html>