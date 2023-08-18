<?php
    class commentmanage {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/commentmanage.php";
        }
        public function deletecomment($id_cmt) {
            require_once "./mvc/Models/comment.php";
            $comment = new comment();
            // require_once "./mvc/Models/course.php";
            // $course = new course();
            // require_once "./mvc/Models/coursecontent.php";
            // $coursecontent = new coursecontent();
           
            $result = $comment->deleteCommentbyID($id_cmt);
            
            if($result && isset($_SERVER['HTTP_REFERER'])) {
                header("Location: " . $_SERVER['HTTP_REFERER']);
                
            } else {
                // Nếu không có trang trước đó, chuyển hướng người dùng đến một trang mặc định
                header("location:http://localhost/PTUDW_META/coursemanage");
            }
        }
    }
?>