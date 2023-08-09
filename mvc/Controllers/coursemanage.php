<?php
    class coursemanage {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            // require_once "./mvc/Models/course.php";
            // $id_user = $_SESSION['user']['id'];
            // $course = new course();
            // $course->showCourseByTeacher($id_user);
            if (isset($_POST['delete-submit'])) {
                
            }
            require_once "./mvc/Views/pages/teacher/coursemanage.php";
        
        }
        public function updateCourse($id) {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            
            $image_path = "";
            require_once "./mvc/Models/course.php";
            $course = new course();
            require_once "./mvc/Models/image.php";
            $updateimage = new image();
            $_SESSION['current'] = $id;
            $result = $course->getCourseById($id);
            // print_r($result) ;
            $id_user = $_SESSION['user']['id'];
            if (isset($_POST['updatecourse-submit'])) {
                $name = $_POST['coursename-update'];
                
                $test = $course->checkDuplicateCourse($id_user, $name);
                // echo "aaaaaaaaaaaaaaaaaaaaaaa{$test['count(*)']}";
                // echo "aaaaaaaaaaaaaaaaaaaaaaa{$result['name']}";
                // echo $name;
                // echo $test['count(*)'];
                if ($test['count(*)'] != 0 && $name != $result['name']) {
                    // $msg = "khoá học đã tồn tại";
                    $msg = "khoá học đã tồn tại";
                    // print_r($test);
                } else {
                    $default_id = $result['id_image'];
                    
                    if (isset($_FILES['coursethumbnail-update'])) {
                        $image = $_FILES['coursethumbnail-update'];
                        $image_path = $image['name'];
                        $default_id = $result['id_image']; 
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$image_path}";
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$default_id}";
                        if (strlen($image_path))
                        $updateimage->updateImage($default_id, $image_path);
                    } 
                    $kq = $course->updateCourse($name, $default_id, $id );
                    if ($kq) {
                        if ($_FILES['coursethumbnail-update']['error'] == 0) {
                            $kq = move_uploaded_file($_FILES['coursethumbnail-update']['tmp_name'], "public/uploads/".$image_path); 
                        }
                        $msg = "Cập nhật khoá học thành công";
                        header("location:http://localhost/PTUDW_META/coursemanage");
                    }
                }
            }
            require_once "./mvc/Views/pages/teacher/updatecourse.php";
        }

        public function showTeacherCourse($name, $id, $id_image) {
            require_once "./mvc/Models/image.php";
            $image = new image();
            $thumbnail_path = $image->getImageNameById($id_image);
            require_once "./mvc/Views/pages/teacher/coursemanage.php";
            $view = '
        <div class="product-card" method="POST">
            <div class="logo-cart">
                <img src="./public/images/logo1.jpg" alt="logo">
                <i class=\'bx bx-bookmark\'></i>
            </div>
            <div class="main-images">
                <img id="blue" class="blue active" src="./public/uploads/'. $thumbnail_path .'" alt="thumbnail">
                
            </div>
            
            <div class="shoe-details">
                <span class="shoe_name"><a href="contentmanage">'. $name .'</a></span>

                <div class="playlist-btn">
                    <div class="stars">
                        <div class="button-layer"></div>
                        <button id="update"><a href="coursemanage/updateCourse/'. $id .'">Cập nhật</a></button>
                    </div>

                    <form class="star" method="post">
                        <div class="button-layer"></div>
                        <input class="button" type="submit" value="Xoá" name="delete-submit">
                    </form>
                </div>
            </div>
        </div>

    </script>
            ';
            return $view;
            
        }

        
    }
?>
<?php
