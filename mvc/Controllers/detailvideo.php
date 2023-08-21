<?php
    class detailvideo {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/detailvideo.php";
        }
        public function saveCourseIntoPlaylist($id_course){
            require_once "./mvc/Models/playlist.php";
            $playlist = new playlist();
            $id_user = $_SESSION['user']['id'];
            $kq = $playlist->insertIntoPlaylist($id_course, $id_user);
            if ($kq) {
                $msg = "Đã lưu khoá học";
            }
            header("Location:http://localhost/PTUDW_META/profile" );
        }
    }
?>