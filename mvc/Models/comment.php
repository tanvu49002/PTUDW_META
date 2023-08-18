<?php
    class comment extends Database {
        function showCommentByIdContent($id) {
            $sql = "SELECT * FROM comment WHERE `id_coursecontent` = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        
        function deleteCommentbyID($id_cmt) {
            $sql = "DELETE FROM comment WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id_cmt);

            return $stmt->execute();
        }
        function deleteCommentbyIDUser($id_user) {
            $sql = "DELETE FROM comment WHERE id_user = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id_user);

            return $stmt->execute();
        }
        function deleteCommentbyIDCourseContent($id_coursecontent) {
            $sql = "DELETE FROM comment WHERE id_coursecontent = :id_coursecontent";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_coursecontent', $id_coursecontent);

            return $stmt->execute();
        }

        function showAmountOfCommentByUserID($id_user) {
            $sql = "SELECT count(*) FROM comment WHERE id_user = :id_user";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);
            

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

 

            return $result['count(*)'];
        }
    }
?>