<?php

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
    }
?>