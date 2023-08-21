<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giảng viên</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/teacherlist1.css">
    <style>
        .table__header .find-button-wrap input:hover {
            cursor: pointer;
            /* background-color: white; */
        }
    </style>
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <main class="table">
            <section class="table__header">
                <h1 style="font-size: 16px">Thông tin giảng viên</h1>
                <form class="input-group" style="margin-left: 40%;" action="" method="post">
                    <input type="search" placeholder="Search Data..." name="SearchTeacher-input">
                    <img src="./public/images/search.png" alt="">
                    <input type="submit" value="Tìm kiếm"
                        style="border-radius: 20px;padding: 8px;background: linear-gradient(130deg, rgba(251, 251, 254, .9), rgba(251, 251, 254, .2));border: none;" name="SearchTeacher-submit">
                </form>

                <!-- <form class="find-button-wrap" action="">
                    
                </form> -->
                

            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> STT <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Họ và tên <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Chức vụ <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Tổng video <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Tổng số khóa học <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Trang cá nhân <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <?php  
                        require_once "./mvc/Models/user.php";
                        $user = new user();
                        require_once "./mvc/Models/course.php";
                        $course = new course();
                        $stt = 1;
                        $type = 2;
                        if (isset($_POST["SearchTeacher-submit"])) {
                            $teacher_name = $_POST["SearchTeacher-input"];
                            $tests = $user->getUserByTypeAndName($type, $teacher_name);
                        }
                        else {
                            $tests = $user->getUserByType($type);
                        }
                        if ($tests) {
                            foreach ($tests as $test) {
                                echo $this->showTeacherList($stt, $test['id'], $test['displayname'], $test['id_avatar']);
                                $stt++;
                            }
                        } else {
                            $msg = "Không tìm thấy giáo viên nào";
                            
                        }
                        
                    ?>
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
                </table>
            </section>
        </main>
    </section>

</body>

</html>