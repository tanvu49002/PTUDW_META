<?php
    class adminmanage {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/admin/adminmanage.php";
        }
    }
?>