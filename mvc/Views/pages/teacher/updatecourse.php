<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật khóa học</title>
    <!--========== BOX ICONS ==========-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>./public/style/update-playlist1.css">

</head>

<body>
<?php include './mvc/Views/masterlayout.php';
    
?>

    <section id="section-main">
        <section id="section-main">

            <section class="form-container">

                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="video_name">Tên Khóa học</label>
                        <input type="text" id="video_name" name="coursename-update" maxlength="100" value="<?php echo $result['name'] ?>">
                    </div>


                    <div class="form-group">
                        <label for="video_file">Chọn ảnh nền cho danh sách phát</label>
                        <input class="file-main-playlist" type="file" accept="image/*" id="" name="coursethumbnail-update" >
                    </div>


                    <?php 
                        // $currentURL = "$_SERVER[REQUEST_URI]";
                        // echo $currentURL;
                        // $len = strlen($currentURL) - 1;
                        // $id = "";
                        // while($len >= 0 && $currentURL[$len] != '='){
                        //     $id = $currentURL[$len] . $id;
                        //     $len--;
                        // }
                        // echo $_SESSION['current'];
                    ?> 
                    <p class="warning"><?php if (!empty($msg)) echo $msg; unset($msg); ?></p>
                    <div class="form-group">
                        <input type="submit" value="Cập nhật khóa học" class="btn" name="updatecourse-submit">
                    </div>
                </form>

            </section>
        </section>

</body>

</html>