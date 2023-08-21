<?php
    class createcontent {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Models/coursecontent.php";
            require_once "./mvc/Models/image.php";
            require_once "./mvc/Models/exercise.php";
            require_once "./mvc/Models/course.php";
            $image = new image();
            $coursecontent = new coursecontent();
            $exercise = new exercise();
            $coursemodel = new course();
            
            if (isset($_POST['CreateContent'])) {
                if (!(isset($_POST['VideoName']))) {
                    $msg = "vui lòng nhập tên video";
                }
                else if (!($_POST['course'])) {
                    $msg = "vui lòng chọn khoá học cho video";
                }
                else {
                    $name = $_POST['VideoName'];
                    $course = $_POST['course'];
                    // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa{$course}";
                    $thumbnailvideo_path = "";
                    $video_path = "";
                    $id_image = "";
                    // $id_user = $_SESSION['user']['id'];
                    // echo $id_image;
                
                    if (isset($_FILES['videothumbnail'])) {
                        $thumbnail = $_FILES['videothumbnail'];
                        $thumbnailvideo_path = $thumbnail['name'];
                    }
                    if (isset($_FILES['contentvideo'])) {
                        $video = $_FILES['contentvideo'];
                        $video_path = $video['name'];
                        // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa{$video_path}";
                    }
                    
                    $id_course = $coursemodel->getIDCourseByName($course, $_SESSION['user']['id']);
                    $test = $coursecontent->checkDuplicateCourseContent($id_course['id'], $name);
                    
                    if ($test['count(*)'] != 0) {
                        // $msg = "khoá học đã tồn tại";
                        
                        $msg = "khoá học đã tồn tại";
                        // print_r($test);
                    } else {
                        $image->addImage($thumbnailvideo_path);
                        $image->addImage($video_path);
                        $id_image = $image->getIDImageByName($thumbnailvideo_path);
                        $id_video = $image->getIDImageByName($video_path);
                        // $_SESSION['thumbnail_path'] = $image->getImageNameById($id_image);
                        $kq = $coursecontent->insertCoursecontent($name, $id_image, $id_video, $id_course['id']);
                        $id_coursecontent = $coursecontent->getIdCourseContentByName($name);
                        // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaa{$id_coursecontent['id']}";
                        if (isset($_POST['question']) && isset($_POST['option1']) && isset($_POST['option2']) && isset($_POST['option3']) && isset($_POST['correct_option']) && $_POST['question'] !== "") {
                            $question = $_POST['question'];
                            $op1 = $_POST['option1'];
                            $op2 = $_POST['option2'];
                            $op3 = $_POST['option3'];
                            $correct_option = $_POST['correct_option'];
                            $exercise->insertExercise($question, $id_coursecontent['id'], $op1, $op2, $op3, $correct_option);
                        }
                        if ($kq) {
                            if ($_FILES['videothumbnail']['error'] == 0) {
                                $kq = move_uploaded_file($_FILES['videothumbnail']['tmp_name'], "public/uploads/".$thumbnailvideo_path); 
                            }
                            if ($_FILES['contentvideo']['error'] == 0) {
                                $kq = move_uploaded_file($_FILES['contentvideo']['tmp_name'], "public/uploads/".$video_path); 
                            }
                            $msg = "Thêm video khoá học thành công";
                            header("Location: " . $_SERVER['HTTP_REFERER']);
                        }
                        else {
                            $msg = "Thêm video khoá học thất bại";
                        }
                    }
                }
                
            }
            require_once "./mvc/Views/pages/teacher/createcontent.php";
        }

        public function showCourseListByTeacherId ($name, $id) {
            $view = '
                <option value="'.$name.'">'.$name.'</option>
            ';
            return $view;
        }
    }
?>