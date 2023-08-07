<?php
    class coursemanage {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/teacher/coursemanage.php";
        }
    }
?>