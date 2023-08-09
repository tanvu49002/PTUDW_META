<?php

    class course extends Database {

        function insertCourse($name, $thumbnail, $id_user){

            $sql = "INSERT INTO course(`id_image`, `name`, `id_user`) VALUES (:tb, :n, :id)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':tb', $thumbnail);

            $stmt->bindParam(':n', $name);

            $stmt->bindParam(':id', $id_user);

            return $stmt->execute();

        }

       

        function getCourseById($id){

            $sql = "SELECT * FROM course WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

 

            return $result;

        }

 

        function updateCourse($name, $thumbnail, $id){

            $sql = "UPDATE `course` SET `id_image`= :tb ,`name`= :n WHERE `id` = :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':n', $name);
            $stmt->bindParam(':tb', $thumbnail);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();

            // $stmt->setFetchMode(PDO::FETCH_ASSOC);

            // $result = $stmt->fetch();
            // return $result;
        }

        function checkDuplicateCourse($id_user, $namecourse) {
            $sql = "SELECT count(*) FROM course WHERE id_user = :id_user AND name = :namecourse";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);
            $stmt->bindParam(':namecourse', $namecourse);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

 

            return $result;
        }

        function showAllCourse() {
            $sql = "SELECT * FROM course";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        function showCourseByTeacher($id) {
            $sql = "SELECT * FROM course WHERE id_user = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }

        function deleteCoursebyID($id) {
            $sql = "DELETE FROM course WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        }
    }
?>