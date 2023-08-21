<?php
    require_once "./mvc/Controllers/delete.php";
    class coursemanage {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 

            
            // require_once "./mvc/Models/course.php";
            // $id_user = $_SESSION['user']['id'];
            // $course = new course();
            // $course->showCourseByTeacher($id_user);
            
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
                        header("Location: " . $_SERVER['HTTP_REFERER']);
                    }
                }
            }
            require_once "./mvc/Views/pages/teacher/updatecourse.php";
        }
        public function deleteCourse($id) {
            deleteCourseMain($id);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }

        public function contentmanage($id_course) {
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 

            require_once "./mvc/Views/pages/teacher/contentmanage.php";
        }
        public function commentmanage($id_course) {
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/teacher/commentmanage.php";
        }
        public function showTeacherCourse($name, $id, $id_image) {
            require_once "./mvc/Models/image.php";
            $image = new image();
            $thumbnail_path = $image->getImageNameById($id_image);
            
            $view = '
        <div class="product-card" method="POST">
            
            <div class="main-images">
                <img id="blue" class="blue active" src="./public/uploads/'. $thumbnail_path .'" alt="thumbnail">
            </div>
            
            <div class="shoe-details">
                <span class="shoe_name"><a href="coursemanage/contentmanage/'.$id.'">'. $name .'</a></span>

                <div class="playlist-btn">
                    <div class="stars">
                        <div class="button-layer"></div>
                        <button id="update"><a href="coursemanage/updateCourse/'. $id .'">Cập nhật</a></button>
                    </div>

                    <div class="stars">
                        <div class="button-layer"></div>
                        <button><a href="coursemanage/deleteCourse/'. $id .'">Xóa</a></button>
                    </div> 
                </div>
            </div>
            <div class="button">
                <div class="button-layer"></div>
                <button><a class="btn-color-index" href="http://localhost/PTUDW_META/coursemanage/commentmanage/'. $id .'">Quản lý bình luận</a></button>
            </div>
        </div>
        
            ';
            return $view;
            
        }

        public function showCourseContent($name, $id, $id_image ){
            require_once "./mvc/Models/image.php";
            $image = new image();
            $thumbnailvideo_path = $image->getImageNameById($id_image);
            $base_url = 'http://localhost/PTUDW_META/';
            // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa{$thumbnailvideo_path}";
            $view = '
            <div class="product-card">
            
            <div class="main-images">
            <img id="blue" class="blue active" src="' .$base_url. './public/uploads/'. $thumbnailvideo_path .'" alt="thumbnail">
            </div>
            <div class="shoe-details">
                <span class="shoe_name"><a href="#">'.$name.'</a></span>

                <div class="playlist-btn">
                    <div class="stars">
                        <div class="button-layer"></div>
                        <button><a href="http://localhost/PTUDW_META/contentmanage/updatecontent/'.$id.'">Cập nhật</a></button>
                    </div>

                    <div class="stars">
                        <div class="button-layer"></div>
                        <button><a href="http://localhost/PTUDW_META/contentmanage/deleteContent/'. $id .'">Xóa</a></button>
                    </div>
                </div>
            </div>
            
        </div>
            ';
            return $view;
        }
        public function showCommentListByContentID($id, $cmt_detail, $id_user) {
            $base_url = 'http://localhost/PTUDW_META/';
            require_once "./mvc/Models/user.php";
            $user = new user();
            require_once "./mvc/Models/image.php";
            $image = new image();
            $displayname = $user->getUserDisplayNameById($id_user);
            $id_avatar = $user->getUserAvatarIDbyId($id_user);
            $avatar_path = $image->getImageNameById($id_avatar);
            $view = '
            <div class="comments__container center__display">
                <div class="comment__card">
                    <div class="comment__info">
                        <div class="pic center__display">
                            <img id="blue" class="cmt-avatar" src="' .$base_url. './public/uploads/'. $avatar_path .'" alt="thumbnail">
                        </div>
                        <div class="cmt-wrap">
                            <small class="nickname">
                                '.$displayname.'
                            </small>
                            <p class="comment">
                                '.$cmt_detail.'
                            </p>
                        </div>
                        
                        <div class="comment__bottom">
                            <div class="container-btn">
                                <button>
                                    <a class="delete-comment" href="http://localhost/PTUDW_META/commentmanage/deletecomment/'.$id.'">Xóa bình luận</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            return $view;
        }
    }
?>
<?php
