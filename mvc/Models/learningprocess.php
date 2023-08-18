<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['newData'])) {
          $data1 = $_POST['data1'];
          $data2 = $_POST['data2'];
          $data3 = $_POST['data3'];
          echo $data1 . $data2 . $data3;
        }
    }


    class learningprocess extends Database {

        
        function deleteLearningProcessCourseContentID($id_coursecontent){
            $sql = "DELETE FROM learning_process WHERE id_coursecontent = :id_coursecontent";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_coursecontent', $id_coursecontent);

            return $stmt->execute();
        }
        function showLearningProcessByIdContent($id) {
            $sql = "SELECT * FROM learning_process WHERE `id_coursecontent` = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }

        function getStatusByIdCourseAndIdUser($id_course, $id_user) {
            $sql = "SELECT status FROM learning_process WHERE `id_course` = :id_course AND `id_user` = :id_user";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id_course', $id_course);
            $stmt->bindParam(':id_user', $id_user);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            return $result ? $result : 0;
        }

        function updateProcess($status, $id_course, $id_user) {
            $sql = "UPDATE `learning_process` SET `status`= :status WHERE `id_course` = :id_course AND `id_user` = :id_user";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':id_course', $id_course);
            $stmt->bindParam(':id_user', $id_user);

            return $stmt->execute();
        }

    }
?>