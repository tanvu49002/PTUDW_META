<?php

    class coursecontent extends Database {
        function insertCourseContent($name, $id_image, $id_video, $id_course){

            $sql = "INSERT INTO `course_content`(`id_course`, `id_video`, `id_image`, `title`) VALUES (:id_course, :id_video, :id_image, :title)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_course', $id_course);

            $stmt->bindParam(':id_video', $id_video);

            $stmt->bindParam(':id_image', $id_image);

            $stmt->bindParam(':title', $name);

            return $stmt->execute();

        }
        
        function showAllCourseContent() {
            $sql = "SELECT * FROM course_content";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        function showCourseContentByCourseId($id) {
            $sql = "SELECT * FROM course_content WHERE id_course = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        function showFirstCourseContentByCourseId($id) {
            $sql = "SELECT * FROM `course_content` WHERE id_course = :id ORDER BY id ASC LIMIT 1;";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            return $result;
        }

        function showCourseContentById($id) {
            $sql = "SELECT * FROM course_content WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            return $result;
        }
        function deleteCourseContentbyID($id) {
            $sql = "DELETE FROM course_content WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        }
        function deleteCourseContentbyCourseID($id_course) {
            $sql = "DELETE FROM course_content WHERE id_course = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id_course);

            $stmt->execute();
        }
        function getCourseContentById($id){

            $sql = "SELECT * FROM course_content WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

            return $result;

        }

        function getIdCourseContentByName($name){

            $sql = "SELECT id FROM course_content WHERE title = :title";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':title', $name);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

            return $result;

        }

        function getIdCourseByIdCourseContent($id){

            $sql = "SELECT id_course FROM course_content WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

            return $result;

        }

        function checkDuplicateCourseContent($id_course, $title) {
            $sql = "SELECT count(*) FROM course_content WHERE id_course = :id_course AND title = :title";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_course', $id_course);
            $stmt->bindParam(':title', $title);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

 

            return $result;
        }

        function updateCourseContent($id_coursecontent, $name, $id_image, $id_video, $id_course){

            $sql = "UPDATE `course_content` SET `title`= :title ,`id_image`= :id_image, `id_video`= :id_video, `id_course`= :id_course WHERE `id` = :id_coursecontent";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_coursecontent', $id_coursecontent);
            $stmt->bindParam(':title', $name);
            $stmt->bindParam(':id_image', $id_image);
            $stmt->bindParam(':id_video', $id_video);
            $stmt->bindParam(':id_course', $id_course);
            
            

            return $stmt->execute();

            // $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // $result = $stmt->fetch();
            // return $result;
        }

        function showAmountofCourseContentByUserId($id_user) {
            $sql = "SELECT count(*) FROM course_content t1 WHERE id_course = ( SELECT id FROM course t2 WHERE t1.id_course = t2.id AND t2.id_user = :id_user );";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);
            

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

 

            return $result['count(*)'];
        }
        function deleteCourseContentByUserId($id_user) {
            $sql = "DELETE FROM course_content t1 WHERE id_course = ( SELECT id FROM course t2 WHERE t1.id_course = t2.id AND t2.id_user = :id_user );";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);
            
            $stmt->execute();

        }
        function getCourseContentByUserId($id_user) {
            $sql = "SELECT * FROM course_content t1 WHERE id_course = ( SELECT id FROM course t2 WHERE t1.id_course = t2.id AND t2.id_user = :id_user );";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetchAll();

            return $result;
        }

        function showCourseHaveContent($id_course){
            $sql = "SELECT count(*) FROM `course_content` WHERE `id_course` = :id_course;";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_course', $id_course);
            

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();
            return $result['count(*)'];
        }

        
    }
?>