<?php
    class createcourse {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            
            require_once "./mvc/Models/course.php";
            require_once "./mvc/Models/user.php";
            $user = new user();
            $course = new course();
            if (isset($_POST['CreateCourse'])) {
                $name = $_POST['CourseName'];
                $thumbnail_path = "";
                $id_image = "";
                $id_user = $_SESSION['user']['id'];
                // echo $id_image;
                if (isset($_FILES['Thumbnail'])) {
                    $thumbnail = $_FILES['Thumbnail'];
                    $thumbnail_path = $thumbnail['name'];
                }
                
                if ($course->checkDuplicateCourse($id_user, $name)) {
                    $msg = "khoá học đã tồn tại";
                } else {
                    $user->addImage($thumbnail_path);
                    $id_image = $user->getIDImageByName($thumbnail_path);
                
                    $kq = $course->insertCourse($name, $id_image, $id_user);
                    if ($kq) {
                        $msg = "Tạo khoá học thành công";
                    }
                }
                
                
            }
            require_once "./mvc/Views/pages/teacher/createcourse.php";
        }
        
    }
?>