<?php
    class comment {
        public function show($id_course) {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            
            require_once "./mvc/Views/pages/comment.php";
        }
        
    }
?>