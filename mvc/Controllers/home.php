<?php
class home
{
    public function show()
    {
        if (!(isset($_SESSION['user']))) {
            header("Location:login");
        }
        // require_once "./mvc/Models/course.php";
        // $course = new course();


        require_once "./mvc/Views/pages/home.php";
    }
    public function detailvideo($id_course)
    {
        if (!(isset($_SESSION['user']))) {
            header("Location:login");
        }

        require_once "./mvc/Views/pages/detailvideo.php";
    }
    public function showHeaderOfContent($name, $date)
    {
        $view = '
            <h2 class="video-title">' . $name . '</h2>
            <p class="date"><i style="color:#8e44ad;" class="fas fa-calendar"></i><span style="margin-left: 5px;">' . $date . '</span></p>
            ';
        return $view;
    }
    public function showCourse($name, $id_image, $id)
    {
        require_once "./mvc/Models/image.php";
        $image = new image();
        $thumbnail_path = $image->getImageNameById($id_image);
        // $name = "vu";
        $view =  '
            <div class="product-card">
               
                <div class="main-images">
                    <img id="blue" class="blue active" src="./public/uploads/' . $thumbnail_path . '" alt="thumbnail">
                    
                </div>
                <div class="shoe-details">
                    <span class="shoe_name">' . $name . '</span>
                    
                </div>
                <div class="button">
                    <div class="button-layer"></div>
                    <button><a class="btn-color-index" href="http://localhost/PTUDW_META/home/detailvideo/' . $id . '">Học ngay</a></button>

                </div>
            </div>
                ';
        return $view;
    }

    public function showContentList($title, $id, $id_video, $create_date)
    {

        $base_url = 'http://localhost/PTUDW_META/';
        require_once "./mvc/Models/image.php";
        $image = new image();
        $video_path = $image->getImageNameById($id_video);

        $view = '
            <li class="playlist-item" data-title="' . $title . '" data-date="' . $create_date . '" data-video="' . $base_url . './public/uploads/' . $video_path . '" data-id="' . $id . '"><a>' . $title . '</a></li>
            ';
        return $view;
    }
    public function showExList($id, $excontent, $sol1, $sol2, $sol3, $ex_result)
    {

        $view = '
            <li class="playlist-item exercise" data-title="Bài tập" data-exercise="./public/uploads/exercise.php" data-id="' . $id . '" data-sol1="' . $sol1 . '" data-sol2="' . $sol2 . '" data-sol3="' . $sol3 . '" data-result="' . $ex_result . '" data-question="' . $excontent . '">bài tập</li>
            ';
        return $view;
    }


    public function showTeacherByContent($name, $id, $id_avatar)
    {
        $base_url = 'http://localhost/PTUDW_META/';
        require_once "./mvc/Models/image.php";
        $image = new image();
        $avatar_path = $image->getImageNameById($id_avatar);
        $view = '
                <div class="img-wrap">
                    <img src="' . $base_url . './public/uploads/' . $avatar_path . '" alt="avatar">
                </div>
                <div class="info-wrap">
                    <h3><a href="./details-profile-teach.php">' . $name . '</a></h3>
                    <span>Giảng viên</span>
                </div>
                <button class="save-main-video"><a href="#">Lưu Video</a></button>


                <style>
                    .save-main-video {
                        position: relative;
                        left: 27.5rem;
                        top: -34rem;
                        padding: 8px 20px;
                        border: none;
                        background-color: #007bff;
                        color: #fff;
                        cursor: pointer;
                        border-radius: 5px;
                    }

                    .save-main-video a {
                        color: #fff;
                    }
                </style>
            ';
        return $view;
    }
}
