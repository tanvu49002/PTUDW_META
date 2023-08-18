<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem trang cá nhân - Giảng viên</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css"
        integrity="sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/viewprofileteacher.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <section class="teacher-profile">
            <?php
                require_once "./mvc/Models/user.php";
                $user = new user();
                require_once "./mvc/Models/course.php";
                $course = new course();
                $tests = $user->getUserByID($id_teacher);
                foreach ($tests as $test) {
                    echo $this->showProfileTeacher($test['id'], $test['displayname'], $test['id_avatar']);
                }
            ?>
        </section>

        <h3 class="" style="position: relative; bottom: 25px; font-size: 26px;">Khóa học</h3>
        <div class="body">
            <div class="list-product">
                <?php
                    require_once "./mvc/Models/course.php";
                    $course = new course();
                    $tests = $course->showCourseByTeacher($id_teacher);
                    foreach ($tests as $test) {
                        echo $this->showCourseInTeacherProfile($test['name'], $test['id'], $test['id_image']);
                    }
                ?>
            </div>
        </div>


    </section>

</body>

</html>