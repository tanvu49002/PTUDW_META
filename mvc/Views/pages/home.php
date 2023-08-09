<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa học</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/index1.css">
    
</head>

<body>
    <?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">

        <h3 class="title-home">Khóa học mới nhất</h3>
        <!-- <div class="card__circle card__circle1"></div> -->
        <div class="card__circle card__circle2"></div>
        <div class="body">

            <div class="list-product">
                <?php  
                    require_once "./mvc/Models/course.php";
                    $course = new course();
                    $tests = $course->showAllCourse();
                    foreach ($tests as $test) {
                        echo $this->showCourse($test['name'], $test['id_image']);
                    }
                ?>
            </div>
        </div>
    </section>

</body>

</html>