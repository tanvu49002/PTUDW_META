<?php
    class createcourse {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            
            require_once "./mvc/Models/course.php";
            require_once "./mvc/Models/image.php";
            $image = new image();
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
                $test = $course->checkDuplicateCourse($id_user, $name);
                
                if ($test['count(*)'] != 0) {
                    // $msg = "khoá học đã tồn tại";
                    
                    $msg = "khoá học đã tồn tại";
                    // print_r($test);
                } else {
                    $image->addImage($thumbnail_path);
                    
                    $id_image = $image->getIDImageByName($thumbnail_path);
                    $_SESSION['thumbnail_path'] = $image->getImageNameById($id_image);
                    $kq = $course->insertCourse($name, $id_image, $id_user);
                    if ($kq) {
                        if ($_FILES['Thumbnail']['error'] == 0) {
                            $kq = move_uploaded_file($_FILES['Thumbnail']['tmp_name'], "public/uploads/".$thumbnail_path); 
                        }
                        $msg = "Tạo khoá học thành công";
                        header("location:http://localhost/PTUDW_META/coursemanage");
                    }
                }
                
                
            }
            require_once "./mvc/Views/pages/teacher/createcourse.php";
        }
        
    }
?>