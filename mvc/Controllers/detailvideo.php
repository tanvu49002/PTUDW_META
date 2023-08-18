<?php
    class detailvideo {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/detailvideo.php";
        }
        public function updateLearningProcess($status){
            
            echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
            print_r($status);
        }
    }
?>