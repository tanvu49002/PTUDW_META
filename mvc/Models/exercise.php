<?php

    class exercise extends Database {

        function insertExercise($excontent, $id_coursecontent, $sol1, $sol2, $sol3, $result){

            $sql = "INSERT INTO `exercise`(`ex_content`, `id_coursecontent`, `solution1`, `solution2`, `solution3`, `result`) VALUES (:content, :id_coursecontent, :sol1, :sol2, :sol3, :result)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':content', $excontent);

            $stmt->bindParam(':id_coursecontent', $id_coursecontent);

            $stmt->bindParam(':sol1', $sol1);

            $stmt->bindParam(':sol2', $sol2);

            $stmt->bindParam(':sol3', $sol3);

            $stmt->bindParam(':result', $result);

            return $stmt->execute();

        }
        function deleteExerciseByCourseContentID($id_coursecontent){
            $sql = "DELETE FROM exercise WHERE id_coursecontent = :id_coursecontent";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_coursecontent', $id_coursecontent);

            return $stmt->execute();
        }
        function showExerciseByIdContent($id) {
            $sql = "SELECT * FROM exercise WHERE `id_coursecontent` = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        function checkExerciseByIdContent($id) {
            $sql = "SELECT * FROM exercise WHERE `id_coursecontent` = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();
            return $result;
        }
    }
?>