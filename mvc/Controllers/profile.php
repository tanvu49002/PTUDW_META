<?php
    class profile {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            else if ($_SESSION['type'] == 1) {
                require_once "./mvc/Views/pages/studentprofile.php";
                
                
            }
            else if ($_SESSION['type'] == 2) {
                require_once "./mvc/Views/pages/teacher/teacherprofile.php";
            }
            
        }
    }
?>