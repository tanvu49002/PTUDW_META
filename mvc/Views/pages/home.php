<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa học</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/index.css">
    
</head>

<body>
    <?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <div class="app90">
            <h3 class="title-home">Khóa học mới nhất</h3>
            <form class="input-group" action="" method="post">
                <input type="text" placeholder="Search Data..." name="SearchCourse-input">
                <!-- <img src="./public/images/search.png" alt=""> -->
                <input class="input-search" type="submit" value="Tìm kiếm" name="SearchCourse-submit">
            </form>

            <!-- <form class="app100" action="" method="post">
                
            </form> -->
        </div>
        <!-- <div class="card__circle card__circle1"></div> -->
        <div class="card__circle card__circle2"></div>
        <div class="body">

            <div class="list-product">
                <?php  
                    require_once "./mvc/Models/course.php";
                    $course = new course();
                    if (isset($_POST["SearchCourse-submit"])) {
                        $course_name = $_POST["SearchCourse-input"];
                        $tests = $course->getCourseByName($course_name);
                        if ($tests){
                            foreach ($tests as $test) {
                                echo $this->showCourse($test['name'], $test['id_image'], $test['id']);
                            }
                        } else {
                            echo "Không tìm thấy khoá học";
                        }
                    }
                    else {
                        $tests = $course->showAllCourse();
                        foreach ($tests as $test) {
                            echo $this->showCourse($test['name'], $test['id_image'], $test['id']);
                        }
                    }
                ?>
            </div>
        </div>
    </section>

</body>

</html>