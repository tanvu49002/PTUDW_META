<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giảng viên</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/admin.css">
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
                <h1 style="font-size: 16px">Quản lý</h1>
                <form class="input-group" style="margin-left: 500px;" action="">
                    <input type="search" placeholder="Search Data...">
                    <img src="./public/images/search.png" alt="">
                </form>

                <form class="find-button-wrap" action="">
                    <input type="submit" value="Tìm kiếm"
                        style="border-radius: 20px;padding: 8px;background: linear-gradient(130deg, rgba(251, 251, 254, .9), rgba(251, 251, 254, .2));border: none;">
                </form>

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
                        $tests = $user->showAllUser();
                        
                        foreach ($tests as $test) {
                            echo $this->showAllUserInAdmin($stt, $test['id'], $test['displayname'], $test['id_avatar'], $test['type']);
                            $stt++;
                        }
                    ?>
                </table>
            </section>
        </main>
    </section>

</body>

</html>