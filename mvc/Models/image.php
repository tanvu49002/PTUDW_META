<?php
    class image extends Database {
        
        function addImage($avatar) {
            $sql = "INSERT INTO image (`path`) VALUES (:avatar)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':avatar', $avatar);
            return $stmt->execute();
        }

        function getIDImageByName($image_path) {
            $sql = "SELECT image.id FROM `image` WHERE path = :path GROUP BY id desc LIMIT 1;";
        
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':path', $image_path);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // Lấy dữ liệu từ kết quả truy vấn
            $result = $stmt->fetch();
        
            // Kiểm tra xem có kết quả hay không, nếu có trả về giá trị "id", nếu không trả về false
            return $result ? $result['id'] : false;
        }

        function getImageNameById($id) {
            $sql = "SELECT * FROM image WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();

            return $result ? $result['path'] : false;
        }

        function updateImage($id, $image_path) {
            $sql = "UPDATE image SET path = :path WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->bindParam(':path', $image_path);

            return $stmt->execute();
        }

        function deleteImagebyID($id) {
            $sql = "DELETE FROM `image` WHERE `image`.`id` = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

           $stmt->execute();
        }
}
?>