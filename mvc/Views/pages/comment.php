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
        <!-- <div class="container center__display">
        <h3 style="margin-right: 46px; font-size: 22px;">Bình luận</h3>

        <div class="app15 center__display">
            <form action="" class="add-comment">
                <textarea class="comment-input" name="" id="" cols="30" rows="10" placeholder="Nhập bình luận...."></textarea>
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


        </div> -->




        <div class="container1" style="position: relative; right: 44px;">

            <div style="position: relative; left: 19px;" class="comment__card">
                <h3 class="comment__title">Quang Minh</h3>
                <form action="">
                    <textarea name="" id="" cols="30" rows="10" style="width: 1102px;height: 119px;">The first comment</textarea>
                    <div class="comment__card-footer">
                        <div class="show-replies">Bình luận</div>
                    </div>
                </form>
            </div>
        


            <div class="comment__container opened" id="first-comment">
                <div class="comment__card">
                    <h3 class="comment__title">Quang Minh</h3>
                    <p>
                        Bài học rất hay
                    </p>
                    <div class="comment__card-footer">
                        <div>Sửa bình luận</div>
                        <div>Xóa bình luận</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script>
            const showContainers = document.querySelectorAll(".show-replies");

            showContainers.forEach((btn) =>
                btn.addEventListener("click", (e) => {
                    let parentContainer = e.target.closest(".comment__container");
                    let _id = parentContainer.id;
                    if (_id) {
                        let childrenContainer = parentContainer.querySelectorAll(
                            `[dataset=${_id}]`
                        );
                        childrenContainer.forEach((child) => child.classList.toggle("opened"));
                    }
                })
            );
        </script> -->
        <style>
            *,
            *::before,
            *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .comment__container {
                display: none;
                position: relative;
            }

            .comment__container.opened {
                display: block;
            }

            .comment__container::before {
                content: "";
                background-color: rgb(170, 170, 170);
                position: absolute;
                min-height: 100%;
                width: 1px;
                left: -10px;
            }

            .comment__container:not(:first-child) {
                margin-left: 3rem;
                margin-top: 1rem;
            }

            .comment__card {
                padding: 20px;
                background-color: white;
                border: 1px solid rgba(0, 0, 0, 0.3);
                border-radius: 0.5rem;
                min-width: 100%;
                box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
            }

            .comment__card h3,
            .comment__card p {
                margin-bottom: 1rem;
            }

            .comment__card-footer {
                display: flex;
                font-size: 0.85rem;
                opacity: 0.6;
                gap: 30px;
                justify-content: flex-end;
                align-items: center;
            }

            .show-replies {
                cursor: pointer;
            }
        </style>
    </section>

</body>

</html>