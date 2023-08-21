<?php

    class playlist extends Database {
        public function showPlaylistByUserId($id){
            $sql = "SELECT * FROM playlist WHERE id_user = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        public function showAmountOfContentInPlaylist($id_user){
            $sql = "SELECT count(*) FROM playlist WHERE id_user = :id_user";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);
            

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetch();

 

            return $result['count(*)'];
        }

        function deletePlaylistbyIDUser($id_user) {
            $sql = "DELETE FROM playlist WHERE id_user = :id_user";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);

            return $stmt->execute();
        }
        function deletePlaylistbyIDCourse($id_course) {
            $sql = "DELETE FROM playlist WHERE id_course = :id_course";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_course', $id_course);

            return $stmt->execute();
        }

        function showPlaylistByIdContent($id) {
            $sql = "SELECT * FROM playlist WHERE `id_coursecontent` = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }
        function insertIntoPlaylist($id_course, $id_user){
            $sql = "INSERT INTO playlist(`id_user`, `id_course`) VALUES (:id_user, :id_course)";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id_user', $id_user);

            $stmt->bindParam(':id_course', $id_course);

            return $stmt->execute();
        }
    }
?>