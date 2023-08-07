<?php
    class login {
      public function show() {
        if (isset($_POST["login-submit"])) {
          //$msg = '';
          require_once "./mvc/Models/user.php";
          $user = new user();
          $email = $_POST["email"];
          $pass = $_POST["pass"];
          // echo "{$email}{$pass}";
          $result = $user->login($email, $pass);
          // echo "{$result}";
          $type = $user->getTypeUser($email, $pass);
          $UserEmail = $user->getUserEmail($email, $pass);
          $Displayname = $user->getUserDisplayName($email, $pass);
          $Id_Avatar = $user->getUserAvatarID($email, $pass);
          $Avatar_Path = $user->getAvatarNameById($Id_Avatar);
          if ($result) {
            
            $_SESSION['user'] = $result;
            $_SESSION['type'] = $type;
            $_SESSION['email'] = $UserEmail;
            $_SESSION['displayname'] = $Displayname;
            $_SESSION['avatar_path'] = $Avatar_Path;
            // echo $_SESSION['avatar_path'];
            header("Location:home");
          } 
          else {
            $msg = 'Email hoặc mật khẩu không đúng.';
          }
        }
        require_once "./mvc/Views/login.php";
      }
  }
?>