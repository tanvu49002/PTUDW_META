<?php
    class register {
        public function show() {
            if (isset($_POST['register-submit'])) {
                $displayname = filter_var($_POST['displayname'], FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];
                $type = -1;
                $avatar_path = "";

                if (isset($_FILES['avatar'])) {
                    $avatar = $_FILES['avatar'];
                    $avatar_path = $avatar['name'];
                } else {
                    $msg = "Thông tin không hợp lệ.";
                }
                
                if (isset($_POST['role'])) {
                    $selectedRole = $_POST['role'];
                    if ($selectedRole === "student") {
                        $type = 1;
                    } else if ($selectedRole === "teacher") {
                        $type = 2;
                    }
                }
                // echo "{$repass} {$type} {$displayname} {$email} {$pass}";
                // echo "{$avatar_path}";
                if (empty($displayname) || empty($email) || empty($pass) || empty($repass) || $type == -1) {
                    $msg = "Thông tin không hợp lệ.";
                } else if ($pass !== $repass) {
                    $msg = "Mật khẩu không khớp.";
                } else {
                    require_once "./mvc/Models/user.php";
                    $user = new user();
                    
                    if ($user->checkUserEmail($email)) {
                        $msg = "Email đã tồn tại.";
                    } else {
                        $user->addImage($avatar_path);
                        $id_avatar = $user->getIDImageByName($avatar_path);    
                        $kq = $user->register($email, $pass, $displayname, $id_avatar, $type);
                        if ($kq) {
                            if ($_FILES['avatar']['error'] == 0) {
                                $kq = move_uploaded_file($_FILES['avatar']['tmp_name'], "public/uploads/".$avatar_path); 
                            }
                            if ($kq) {
                                header("location:login");
                            }
                        }
                        
                        

                    }
                }
            }
            require_once "./mvc/Views/register.php";
        }
    }
?>
