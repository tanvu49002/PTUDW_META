
<?php
require_once "./mvc/Controllers/delete.php";
    class adminmanage  {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/admin/adminmanage.php";
        }

        public function deleteUser($id, $id_avatar, $type){
            if ($type == 1) {
                require_once "./mvc/Models/user.php";
                $user = new user();
                require_once "./mvc/Models/image.php";
                $image = new image();
                require_once "./mvc/Models/playlist.php";
                $playlist = new playlist();
                require_once "./mvc/Models/comment.php";
                $comment = new comment();
                $comment->deleteCommentbyIDUser($id);
                $playlist->deletePlaylistbyIDUser($id);
                $user->deleteUserbyID($id);
                if ($id_avatar != 1) {
                    $image->deleteImagebyID($id_avatar);
                }
                
                header("location:http://localhost/PTUDW_META/adminmanage");
            }
            else if ($type == 2){
                require_once "./mvc/Models/user.php";
                $user = new user();
                require_once "./mvc/Models/image.php";
                $image = new image();
                require_once "./mvc/Models/course.php";
                $course = new course();
                require_once "./mvc/Models/coursecontent.php";
                $coursecontent = new coursecontent();
                require_once "./mvc/Models/playlist.php";
                $playlist = new playlist();
                require_once "./mvc/Models/comment.php";
                $comment = new comment();
                require_once "./mvc/Models/getdata.php";
                $getdata = new getdata();
                // $video = $coursecontent->getCourseContentByUserId($id);
                
                 $Courses = $getdata->getData(array("id"), "course", 'WHERE id_user = '.$id.'');
                
                foreach ($Courses as $values) {
                    
                    deleteCourseMain($values['id']);
                }
                //xoá cmt của người dùng trong video
                $comment->deleteCommentbyIDUser($id);
                
                //xoá video khỏi playlist người học
                $playlist->deletePlaylistbyIDUser($id);
                
                //xoá ngườI dùng
                $user->deleteUserbyID($id);
                //xoá avatar người dùng
                if ($id_avatar != 1) {
                    $image->deleteImagebyID($id_avatar);
                }
                header("location:http://localhost/PTUDW_META/adminmanage");
            }
        }

        public function showAllUserInAdmin($stt, $id, $name, $id_avatar, $type){
            require_once "./mvc/Models/image.php";
            $image = new image();
            require_once "./mvc/Models/course.php";
            $course = new course();
            require_once "./mvc/Models/coursecontent.php";
            $corsecontenut = new coursecontent();
            $avatar_path = $image->getImageNameById($id_avatar);
            $AmountOfCourse = $course->showAmountofCourseByUserId($id);
            $AmountOfCourseContent = $corsecontenut->showAmountofCourseContentByUserId($id);
            if ($type == 1){
                $role = "Người học";
                $view = '
            <tbody>
                <tr>
                    <td> '.$stt.' </td>
                    <td> <img src="./public/uploads/'. $avatar_path .'" alt="">'.$name.'</td>
                    <td> '.$role.' </td>
                    <td class="test-remove">  </td>
                    <td class="test-remove"> <strong>  </strong></td>
                    <td>
                        <div class="app11">
                            <p id="app12" class="status delivered"><a href="http://localhost/PTUDW_META/adminmanage/deleteUser/'.$id.'/'.$id_avatar.'/'.$type.'"> Xóa </a>
                            </p>
                            <p class="status delivered"><a href="http://localhost/PTUDW_META/profile/updateUserProfile/'.$id.'/'.$id_avatar.'">Cập nhật</a>
                            </p>

                        </div>
                    </td>
                </tr>
            </tbody>
            ';
            } else if ($type == 2) {
                $role = "Giảng viên";
                $view = '
            <tbody>
                <tr>
                    <td> '.$stt.' </td>
                    <td> <img src="./public/uploads/'. $avatar_path .'" alt="">'.$name.'</td>
                    <td> '.$role.' </td>
                    <td class="test-remove"> '.$AmountOfCourseContent.' </td>
                    <td class="test-remove"> '.$AmountOfCourse.' </td>
                    <td>
                        <div class="app11">
                            <p id="app12" class="status delivered"><a href="http://localhost/PTUDW_META/adminmanage/deleteUser/'.$id.'/'.$id_avatar.'/'.$type.'"> Xóa </a>
                            </p>
                            <p class="status delivered"><a href="http://localhost/PTUDW_META/profile/updateUserProfile/'.$id.'/'.$id_avatar.'">Cập nhật</a>
                            </p>

                        </div>
                    </td>
                </tr>
            </tbody>
            ';
            } else {
                $role = "Admin";
                $view = '
            <tbody>
                <tr>
                    <td> '.$stt.' </td>
                    <td> <img src="./public/uploads/'. $avatar_path .'" alt="">'.$name.'</td>
                    <td> '.$role.' </td>
                    <td class="test-remove">  </td>
                    <td class="test-remove"> <strong>  </strong></td>
                    <td>
                        <div class="app11">
                            <p class="status delivered"><a href="http://localhost/PTUDW_META/profile/updateprofile/'.$id.'">Cập nhật</a>
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>
            ';
            }
            
            
            return $view;
           
        }
    }
?>