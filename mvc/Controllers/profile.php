<?php
    class profile {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            else if ($_SESSION['user']['type'] == 1) {
                require_once "./mvc/Models/user.php";
                require_once "./mvc/Models/image.php";
                $user = new user();
                $image = new image();
                $Id_Avatar = $user->getUserAvatarID($_SESSION['user']['email'], $_SESSION['user']['password']);
                $Avatar_Path = $image->getImageNameById($Id_Avatar);
                $_SESSION['avatar_path'] = $Avatar_Path;
                require_once "./mvc/Views/pages/studentprofile.php";
                
                
            }
            else if ($_SESSION['user']['type'] == 2) {
                require_once "./mvc/Models/user.php";
                require_once "./mvc/Models/image.php";
                $user = new user();
                $image = new image();
                $Id_Avatar = $user->getUserAvatarID($_SESSION['user']['email'], $_SESSION['user']['password']);
                $Avatar_Path = $image->getImageNameById($Id_Avatar);
                $_SESSION['avatar_path'] = $Avatar_Path;
                require_once "./mvc/Views/pages/teacher/teacherprofile.php";
            }
            
        }
        public function updateprofile($id) {
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Models/user.php";
            $user = new user();
            require_once "./mvc/Models/image.php";
            $image = new image();
            $id_avatar = $_SESSION['user']['id_avatar'];
            $pass = "";
            if (isset($_POST['updateprofile-submit'])) {
                $displayname = $_POST['update-displayname'];
                if (isset($_POST['old_pass']) && isset($_POST['new_pass']) && isset($_POST['re_pass']) && $_POST['old_pass'] !== "") {
                    $oldpass = $_POST['old_pass'];
                    if ($user->checkPassword($id, $oldpass)) {
                        if ($_POST['new_pass'] === $_POST['re_pass']) {
                            $pass = $_POST['new_pass'];
                            $user->changePassword($id, $pass);
                            $_SESSION['user']['password'] = $pass;
                            $kq = $user->updateUserInfor($id, $displayname, $id_avatar);
                            if ($kq) {
                                if ($_FILES['update-avatar']['error'] == 0) {
                                    $kq = move_uploaded_file($_FILES['update-avatar']['tmp_name'], "public/uploads/".$avatar_path); 
                                }
                                $_SESSION['user']['displayname'] = $displayname;
                                $msg = "Cập nhật thông tin thành công";
                                // echo "aaaaaaaaaaaaaaaaaaaaaaa{$_SESSION['avatar_path']}";
                                // header("location:http://localhost/PTUDW_META/profile");
                            }
                            $msg = "Cập nhật thông tin thành công";
                        }
                        else {
                            $msg = "Thông tin không hợp lệ";
                        }
                    } 
                    else {
                        $msg = "Mật khẩu cũ không đúng";
                    }
                } else {
                    if (isset($_FILES['update-avatar'])) {
                        $avatar = $_FILES['update-avatar'];
                        $avatar_path = $avatar['name'];
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$image_path}";
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$default_id}";
                        if (strlen($avatar_path))
                        $image->updateImage($id_avatar, $avatar_path);
                        // $_SESSION['avatar_path'] = $avatar_path;
                    } 
                    $kq = $user->updateUserInfor($id, $displayname, $id_avatar);
                    if ($kq) {
                        if ($_FILES['update-avatar']['error'] == 0) {
                            $kq = move_uploaded_file($_FILES['update-avatar']['tmp_name'], "public/uploads/".$avatar_path); 
                        }
                        $_SESSION['user']['displayname'] = $displayname;
                        $msg = "Cập nhật thông tin thành công";
                        // echo "aaaaaaaaaaaaaaaaaaaaaaa{$_SESSION['avatar_path']}";
                        // header("location:http://localhost/PTUDW_META/profile");
                    }
                }
            }
            require_once "./mvc/Views/pages/updateprofile.php";
        }
        public function showUserPlaylist($id_coursecontent){
            $base_url = 'http://localhost/PTUDW_META/';
            require_once "./mvc/Models/coursecontent.php";
            $coursecontent = new coursecontent();
            require_once "./mvc/Models/image.php";
            $image = new image();
            $name = $coursecontent->showCourseContentById($id_coursecontent);
            $thumbnail_path = $image->getImageNameById($name['id_image']);
            $view = '
            <div class="product-card">
                <div class="main-images">
                    <img id="blue" class="blue active" src="' .$base_url. './public/uploads/'. $thumbnail_path .'" alt="blue">
                    
                </div>
                <div class="shoe-details">
                    <span class="shoe_name">'.$name['title'].'</span>
                    
                </div>
                <div class="button">
                    <div class="button-layer"></div>
                    <button><a class="btn-color-index" href="http://localhost/PTUDW_META/home/detailvideo/'.$id_coursecontent.'">Học ngay</a></button>

                </div>
            </div>
            ';
            return $view;
        }
    }
?>