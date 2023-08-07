<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phần điều khiển</title>
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="./public/style/nav.css">
</head>

<body>
    <aside class="sidebar">
        <div class="logo">
            <img src="./public/images/logo.jpg" alt="logo">
            <h2><a href="home">Meta</a></h2>
        </div>
        <ul class="links">
            <h4>Danh cho học sinh</h4>
            <li>
                <span class="material-symbols-outlined">dashboard</span>
                <a href="home">Trang chủ</a>
            </li>
            <li>
                <span class="material-symbols-outlined">show_chart</span>
                <a href="about">Thành viên</a>
            </li>
            <li>
                <span class="material-symbols-outlined">group</span>
                <a href="teacherlist">Giảng viên</a>
            </li>
            <!-- <li>
                <span class="material-symbols-outlined">flag</span>
                <a href="#">Reports</a>
            </li> -->
            <?php if ($_SESSION['type'] == 2) { ?>
            <hr>
            <h4>Dành cho giảng viên</h4>
            <li>
                <span class="material-symbols-outlined">person</span>
                <a href="coursemanage">Quản lý khóa học</a>
            </li>
            <?php } ?>

            <?php if ($_SESSION['type'] == 3) { ?>
            <hr>
            <h4>Quản lý</h4>
            <li>
                <span class="material-symbols-outlined">bar_chart</span>
                <a href="adminmanage">Quản lý</a>
            </li>
            <?php } ?>
            <?php if ($_SESSION['type'] == 1 || $_SESSION['type'] == 2) { ?>
            <hr>
            <h4>Tài khoản</h4>
            <li>
                <span class="material-symbols-outlined">bar_chart</span>
                <a href="profile">Trang cá nhân</a>
            </li>
            <?php } ?>
            <!-- <li>
                <span class="material-symbols-outlined">mail</span>
                <a href="#">Khóa học đã lưu</a>
            </li> -->
            <!-- <li>
                <span class="material-symbols-outlined">settings</span>
                <a href="#">Settings</a>
            </li> -->
            <form action="" method="Post">
                <li class="logout-link">
                    <span class="material-symbols-outlined">logout</span>
                    <!-- <a href="#">Đăng xuất</a> -->
                    <input class="input-nav-main" type="submit" value="Đăng xuất" name="logout-submit">
                </li>
                <?php
                    if (isset($_POST['logout-submit'])) {
                        unset($_SESSION['user']);
                        header('location:login');
                    }
                ?>
            </form>
            
        </ul>
    </aside>

</body>

</html>