<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/CMTmanage.css">
</head>

<body>
    <?php include './mvc/Views/masterlayout.php' ?>

    <section id="section-main">
        <div class="container center__display">
            <h3 style="margin-right: 46px; font-size: 22px;">Bình luận</h3>
            <?php
                require_once "./mvc/Models/comment.php";
                $comment = new comment();
                $id = $id_content;
                $tests = $comment->showCommentByIdContent($id);
                foreach ($tests as $test) {
                    echo $this->showCommentListByContentID($test['id'], $test['comment_detail'], $test['id_user']);
                }
            ?>

        </div>
        
    </section>

</body>

</html>