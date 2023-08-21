<?php
    function deleteCourseMain($id){
            require_once "./mvc/Models/getdata.php";
            $getdata = new getdata();
            require_once "./mvc/Models/course.php";
            $course = new course();
            require_once "./mvc/Models/image.php";
            $image = new image();
            require_once "./mvc/Models/playlist.php";
            $playlist = new playlist();
            require_once "./mvc/Models/learningprocess.php";
            $learningprocess = new learningprocess();
            require_once "./mvc/Models/comment.php";
            $comment = new comment();
            $tests = $getdata->getData(array('id'), 'course_content', 'WHERE id_course = ' .$id);
            foreach ($tests as $test){
                foreach ($test as $dt) {
                    deleteContentMain($dt);
                }
            }
            $learningprocess->deleteLearningProcessByCourseID($id);
            $result = $getdata->getData(array('id_image'), 'course', 'WHERE id = ' .$id);
            // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
            // print_r($result[0]['id_image']);
            $id_image = $result[0]['id_image'];
            $comment->deleteCommentbyIDCourse($id);
            $playlist->deletePlaylistbyIDCourse($id);
            $course->deleteCoursebyID($id);
            $image->deleteImagebyID($id_image);
    }
    function deleteContentMain($id_content) {
        require_once "./mvc/Models/coursecontent.php";
            $coursecontent = new coursecontent();
            require_once "./mvc/Models/image.php";
            $image = new image();
            require_once "./mvc/Models/learningprocess.php";
            $learningprocess = new learningprocess();
            require_once "./mvc/Models/playlist.php";
            $playlist = new playlist();
            require_once "./mvc/Models/exercise.php";
            $exercise = new exercise();
            
            $exercise->deleteExerciseByCourseContentID($id_content);
            $result = $coursecontent->getCourseContentById($id_content);
            $id_image = $result['id_image'];
            $id_video = $result['id_video'];
            $coursecontent->deleteCourseContentbyID($id_content);
            $image->deleteImagebyID($id_image);
            $image->deleteImagebyID($id_video);
    }
?>