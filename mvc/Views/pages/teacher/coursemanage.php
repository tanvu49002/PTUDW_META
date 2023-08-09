<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khóa học</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/playlist3.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">

        <h3 class="title-home">Quản lý khóa học</h3>
        <!-- <div class="card__circle card__circle1"></div> -->
        <div class="card__circle card__circle2"></div>
        <div class="body">

            <div class="list-product">
                <div class="product-card1">
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="createcourse">Thêm khóa
                                học</a></button>
                    </div>
                </div>

                <?php  
                    require_once "./mvc/Models/course.php";
                    $course = new course();
                    $id_user = $_SESSION['user']['id'];
                    $tests = $course->showCourseByTeacher($id_user);
                    foreach ($tests as $test) {
                        echo $this->showTeacherCourse($test['name'], $test['id'], $test['id_image']);
                    }
                ?>
            </div>
        </div>
    </section>

</body>

</html>