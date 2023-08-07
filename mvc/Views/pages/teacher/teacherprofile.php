<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân - Giảng viên</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css"
        integrity="sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./public/style/CRUD-profile-teach.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <section class="teacher-profile">


            <div class="details">
                <div class="tutor">
                    <img src="./public/uploads/<?php echo $_SESSION['avatar_path']?>" alt="">
                    <h3><?php echo $_SESSION['displayname'] ?></h3>
                    <span>Giảng viên</span>
                </div>
                <div class="flex">
                    <a style="width: 565px;" href="#">
                        <p>Tổng số khóa học <span>4</span></p>
                    </a>

                    <a style="width: 565px;" href="#">
                        <p>Tổng số video <span>4</span></p>
                    </a>

                    <a style="width: 1200px;" href="update-profile.php">
                        <p>Cập nhật trang cá nhân</p>
                    </a>
                </div>
            </div>

        </section>

    </section>

</body>

</html>