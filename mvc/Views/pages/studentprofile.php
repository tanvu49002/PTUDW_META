
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cá nhân - Học sinh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css"
        integrity="sha512-f2MWjotY+JCWDlE0+QAshlykvZUtIm35A6RHwfYZPdxKgLJpL8B+VVxjpHJwZDsZaWdyHVhlIHoblFYGkmrbhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./public/style/view-profile-student1.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <section class="teacher-profile">


            <div class="details">
                <div class="tutor">
                    <img src="./public/uploads/<?php echo $_SESSION['avatar_path']?>" alt="">
                    
                    <h3><?php echo $_SESSION['displayname'] ?></h3>
                    
                    <span>Học sinh</span>
                    
                </div>
                <div class="flex">
                    <a style="width: 565px;" href="#">
                        <p>Bài học đã lưu : <span>4</span></p>
                    </a>

                    <a style="width: 565px;" href="#">
                        <p>Số lượt bình luận : <span>4</span></p>
                    </a>

                    <a style="width: 1200px;" href="update-profile.php">
                        <p>Cập nhật trang cá nhân</p>
                    </a>
                </div>
            </div>

        </section>

        <h3 class="" style="position: relative; bottom: 25px; font-size: 26px;">Khóa học đã lưu</h3>
        <div class="body">

            <div class="list-product">
                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name">HTML CSS từ Zero đến Hero</span>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="./details-video.php">Học ngay</a></button>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>