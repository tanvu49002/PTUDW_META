<?php
    require_once "./mvc/Controllers/delete.php";
    class contentmanage {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            }
            
            require_once "./mvc/Views/pages/teacher/contentmanage.php";
        }
        
        public function updateContent($id) {
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            $image_path = "";
            require_once "./mvc/Models/coursecontent.php";
            $coursecontent = new coursecontent();
            require_once "./mvc/Models/image.php";
            $updateimage = new image();
            require_once "./mvc/Models/course.php";
            $coursemodel = new course();
            $result = $coursecontent->getCourseContentById($id);
            // $_SESSION['current'] = $id;
            // $result = $course->getCourseById($id);
            // print_r($result) ;
            // $id_user = $_SESSION['user']['id'];
            if (isset($_POST['updatevideo-submit'])) {
                $name = $_POST['updateVideoName'];
                $course = $_POST['course'];
                $id_course = $coursemodel->getIDCourseByName($course, $_SESSION['user']['id']);
                $test = $coursecontent->checkDuplicateCourseContent($id_course['id'], $name);
                // echo "aaaaaaaaaaaaaaaaaaaaaaa{$test['count(*)']}";
                // echo "aaaaaaaaaaaaaaaaaaaaaaa{$result['name']}";
                // echo $name;
                // echo $test['count(*)'];
                if ($test['count(*)'] != 0 && $name != $result['title']) {
                    // $msg = "khoá học đã tồn tại";
                    $msg = "khoá học đã tồn tại";
                    // print_r($test);
                } else {
                    $default_id = $result['id_image'];
                    $default_id_video = $result['id_video'];
                    if (isset($_FILES['updateThumbnailVideo'])) {
                        $image = $_FILES['updateThumbnailVideo'];
                        $image_path = $image['name'];
                        $default_id = $result['id_image']; 
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$image_path}";
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$default_id}";
                        if (strlen($image_path))
                        $updateimage->updateImage($default_id, $image_path);
                    } 
                    if (isset($_FILES['updateVideoPath'])) {
                        $video = $_FILES['updateVideoPath'];
                        $video_path = $video['name'];
                        $default_id_video = $result['id_video'];
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$image_path}";
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$default_id_video}";
                        if (strlen($video_path))
                        $updateimage->updateImage($default_id_video, $video_path);
                    } 
                    $kq = $coursecontent->updateCourseContent($id, $name, $default_id, $default_id_video, $id_course['id']);
                    if ($kq) {
                        if ($_FILES['updateThumbnailVideo']['error'] == 0) {
                            $kq = move_uploaded_file($_FILES['updateThumbnailVideo']['tmp_name'], "public/uploads/".$image_path); 
                        }
                        if ($_FILES['uupdateVideoPath']['error'] == 0) {
                            $kq = move_uploaded_file($_FILES['updateVideoPath']['tmp_name'], "public/uploads/".$video_path); 
                        }
                        $msg = "Cập nhật video thành công";
                        header("Location: " . $_SERVER['HTTP_REFERER']);
                    }
                }
            }
            require_once "./mvc/Views/pages/teacher/updatecontent.php";
        }

        public function deleteContent($id) {
            deleteContentMain($id);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        
 
        
        

        public function showCourseListByTeacherId ($name, $id) {
            $view = '
                <option value="'.$name.'">'.$name.'</option>
            ';
            return $view;
        }
        
        
    }
?>