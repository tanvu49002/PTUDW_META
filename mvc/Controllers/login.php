<?php
    class login {
      public function show() {
        if (isset($_POST["login-submit"])) {
          //$msg = '';
          require_once "./mvc/Models/user.php";
          require_once "./mvc/Models/image.php";
          $user = new user();
          $image = new image();
          $email = $_POST["email"];
          $pass = md5($_POST["pass"]);
          
          // echo "{$email}{$pass}";
          $result = $user->login($email, $pass);
          if ($result) {
            $_SESSION['user'] = $result;
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