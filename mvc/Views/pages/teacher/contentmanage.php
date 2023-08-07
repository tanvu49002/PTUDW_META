<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khóa học</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/playlist-content.css">
</head>

<body>
    <?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">

        <h3 class="title-home">Quản lý video</h3>
        <!-- <div class="card__circle card__circle1"></div> -->
        <div class="card__circle card__circle2"></div>
        <div class="body">

            <div class="list-product">
                <div class="product-card1">
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="createcontent">Thêm video</a></button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="logo-cart">
                        <img src="./public/images/logo1.jpg" alt="logo">
                        <i class='bx bx-shopping-bag'></i>
                    </div>
                    <div class="main-images">
                        <img id="blue" class="blue active" src="./public/images/blue.png" alt="blue">
                        <img id="pink" class="pink" src="./public/images/pink.png" alt="blue">
                        <img id="yellow" class="yellow" src="./public/images/yellow.png" alt="blue">
                    </div>
                    <div class="shoe-details">
                        <span class="shoe_name"><a href="#">HTML CSS từ Zero đến Hero</a></span>

                        <div class="playlist-btn">
                            <div class="stars">
                                <div class="button-layer"></div>
                                <button><a href="updatecontent">Cập nhật</a></button>
                            </div>

                            <div class="stars">
                                <div class="button-layer"></div>
                                <button><a href="#">Xóa</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="commentmanage">Quản lý bình luận</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>