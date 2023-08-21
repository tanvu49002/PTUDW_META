
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
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/viewprofilestudent.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <section class="teacher-profile">


            <div class="details">
                <div class="tutor">
                    <img src="./public/uploads/<?php echo $_SESSION['avatar_path']?>" alt="">
                    
                    <h3><?php echo $_SESSION['user']['displayname'] ?></h3>
                    
                    <span>Học sinh</span>
                    
                </div>
                <div class="flex">
                    <a style="width: 100%;" href="#">
                        <p>Video đã lưu : <span>
                            <?php
                                require_once "./mvc/Models/playlist.php";
                                $playlist = new playlist();
                                $id = $_SESSION['user']['id'];
                                $amountplaylist = $playlist->showAmountOfContentInPlaylist($id);
                                echo $amountplaylist;
                            ?>
                        </span></p>
                    </a>

                    <a style="width: 100%;" href="#">
                        <p>Số lượt bình luận : <span>
                            <?php
                                require_once "./mvc/Models/comment.php";
                                $comment = new comment();
                                $id = $_SESSION['user']['id'];
                                $amountcomment = $comment->showAmountOfCommentByUserID($id);
                                echo $amountcomment;
                            ?>
                        </span></p>
                    </a>

                    <a style="width: 100%;" href="http://localhost/PTUDW_META/profile/updateprofile/<?php echo $_SESSION['user']['id']?>">
                        <p style="color:white; background-color:blue;">Cập nhật trang cá nhân</p>
                    </a>
                </div>
            </div>

        </section>

        <h3 class="" style="position: relative; bottom: 25px; font-size: 26px;">Video đã lưu</h3>
        <div class="body">
            <div class="list-product">
                <?php  
                    require_once "./mvc/Models/playlist.php";
                    $playlist = new playlist();
                    $id = $_SESSION['user']['id'];
                    $tests = $playlist->showPlaylistByUserId($id);
                    foreach ($tests as $test) {
                        echo $this->showUserPlaylist($test['id_course']);
                    }
                ?>
            </div>
        </div>
    </section>

</body>

</html>