<?php
    class comment extends Database {
        function showCommentByIdCourse($id_course) {
            $sql = "SELECT * FROM comment WHERE id_course = :id ORDER BY id DESC;
            ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id_course);
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
        function deleteCommentbyIDCourse($id_course) {
            $sql = "DELETE FROM comment WHERE id_course = :id_course";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_course', $id_course);

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
        function insertComment($cmtdetail, $id_user, $id_course){

            $sql = "INSERT INTO comment(`comment_detail`, `id_user`, `id_course`) VALUES (:cmtdetail, :id_user, :id_course)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':cmtdetail', $cmtdetail);

            $stmt->bindParam(':id_user', $id_user);

            $stmt->bindParam(':id_course', $id_course);

            return $stmt->execute();

        }
    }
?>