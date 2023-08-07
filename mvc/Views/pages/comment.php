<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./public/style/comment.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>

    <section id="section-main">
        <div class="container center__display">
            <h3 style="margin-right: 46px; font-size: 22px;">Bình luận</h3>

            <div class="app15 center__display">
                <form action="" class="add-comment">
                    <textarea class="comment-input" name="" id="" cols="30" rows="10"
                        placeholder="Nhập bình luận...."></textarea>
                    <input class="comment-submit" type="submit" value="Bình luận">
                </form>
            </div>


            <div class="comments__container center__display">
                <div class="comment__card">
                    <div class="pic center__display">
                        A
                    </div>
                    <div class="comment__info">
                        <small class="nickname">
                            UserNameHere
                        </small>
                        <p class="comment">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, in magnam! Libero?
                        </p>
                        <div class="comment__bottom">
                            <div class="heart__icon--comment">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="container-btn">

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comments__container center__display">
                <div class="comment__card">
                    <div class="pic center__display">
                        A
                    </div>
                    <div class="comment__info">
                        <small class="nickname">
                            UserNameHere
                        </small>
                        <p class="comment">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, in magnam! Libero?
                        </p>
                        <div class="comment__bottom">
                            <div class="heart__icon--comment">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="container-btn">


                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="comments__container center__display">
                <div class="comment__card">
                    <div class="pic center__display">
                        A
                    </div>
                    <div class="comment__info">
                        <small class="nickname">
                            UserNameHere
                        </small>
                        <p class="comment">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, in magnam! Libero?
                        </p>
                        <div class="comment__bottom">
                            <div class="heart__icon--comment">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="container-btn">


                                
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </section>

</body>

</html>