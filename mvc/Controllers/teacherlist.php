<?php
    class teacherlist {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/teacherlist.php";
        }

        public function viewprofileteacher($id_teacher){
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/viewprofileteacher.php";
        }

        public function showProfileTeacher($id, $name, $id_avatar) {
            $base_url = 'http://localhost/PTUDW_META/';
            require_once "./mvc/Models/image.php";
            $image = new image();
            require_once "./mvc/Models/course.php";
            $course = new course();
            require_once "./mvc/Models/coursecontent.php";
            $corsecontenut = new coursecontent();
            $avatar_path = $image->getImageNameById($id_avatar);
            // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa{$avatar_path}";
            $AmountOfCourse = $course->showAmountofCourseByUserId($id);
            $AmountOfCourseContent = $corsecontenut->showAmountofCourseContentByUserId($id);
            $view = '
            <div class="details">
                <div class="tutor">
                    <img src="' .$base_url. './public/uploads/'. $avatar_path .'" alt="">
                    <h3>'.$name.'</h3>
                    <span>Giảng viên</span>
                </div>
                <div class="flex">
                    <a style="width: 100%; cursor: default;" href="#">
                        <p>Tổng số khóa học: <span>'.$AmountOfCourse.'</span></p>
                    </a>

                    <a style="width: 100%; cursor: default;" href="#">
                        <p>Tổng số video: <span>'.$AmountOfCourseContent.'</span></p>
                    </a>
                </div>
            </div>
            ';
            return $view;
        }
        public function showCourseInTeacherProfile($name, $id, $id_image){
            $base_url = 'http://localhost/PTUDW_META/';
            require_once "./mvc/Models/image.php";
            $image = new image();
            $thumbnailcourse_path = $image->getImageNameById($id_image);
            $view =  '
            <div class="product-card">
               
                <div class="main-images">
                    <img id="blue" class="blue active" src="' .$base_url. './public/uploads/'. $thumbnailcourse_path .'" alt="thumbnail">
                    
                </div>
                <div class="shoe-details">
                    <span class="shoe_name">' . $name . '</span>
                    
                </div>
                <div class="button">
                    <div class="button-layer"></div>
                    <button><a class="btn-color-index" href="http://localhost/PTUDW_META/home/detailvideo/'.$id.'">Học ngay</a></button>

                </div>
            </div>
                ';
            return $view;
        }

        public function showTeacherList($stt, $id, $name, $id_avatar) {
            require_once "./mvc/Models/image.php";
            $image = new image();
            require_once "./mvc/Models/course.php";
            $course = new course();
            require_once "./mvc/Models/coursecontent.php";
            $corsecontenut = new coursecontent();
            $avatar_path = $image->getImageNameById($id_avatar);
            $AmountOfCourse = $course->showAmountofCourseByUserId($id);
            $AmountOfCourseContent = $corsecontenut->showAmountofCourseContentByUserId($id);
            $view = '
            <tbody>
                <tr>
                    <td> '.$stt.' </td>
                    <td> <img src="./public/uploads/'. $avatar_path .'" alt="">'.$name.'</td>
                    <td> Giảng viên </td>
                    <td class="test-remove">'.$AmountOfCourseContent.'</td>
                    <td class="test-remove"> <strong> '.$AmountOfCourse.' </strong></td>
                    <td>
                        <p class="status delivered"><a href="http://localhost/PTUDW_META/teacherlist/viewprofileteacher/'.$id.'">Xem thông tin</a></p>
                    </td>
                </tr>
            </tbody>
            ';
            return $view;
        }
    }
?>