<?php
    class user extends Database {
        function login($email, $pass) {
            $sql = "SELECT * FROM user WHERE email = :email AND password = :pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();

            return $result || false;
        }

        function getTypeUser($email, $pass) {
            $sql = "SELECT * FROM user WHERE email = :email AND password = :pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
        
            // Lấy dữ liệu từ kết quả truy vấn
            $result = $stmt->fetch();
        
            // Nếu có kết quả, trả về giá trị của cột "type", nếu không, trả về false
            return $result ? $result['type'] : false;
        }
        function addAvatar($avatar) {
            $sql = "INSERT INTO image (`path`) VALUES (:avatar)";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':avatar', $avatar);
            return $stmt->execute();
        }
        function getIDAvatarByName($filename) {
            $sql = "SELECT id FROM image WHERE path = :filename";
        
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':filename', $filename);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            
            // Lấy dữ liệu từ kết quả truy vấn
            $result = $stmt->fetch();
        
            // Kiểm tra xem có kết quả hay không, nếu có trả về giá trị "id", nếu không trả về false
            return $result ? $result['id'] : false;
        }
        

        function checkUserEmail($email) {
            $sql = "SELECT * FROM user WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_ASSOC) : false;
        }
        
        

        function register($email, $pass, $displayname, $id_avatar, $type) {
            $sql = "INSERT INTO user (`email`, `password`, `displayname`, `id_avatar`, `type`) VALUES (:email, :pass, :displayname, :id_avatar, :type)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':displayname', $displayname);
            $stmt->bindParam(':id_avatar', $id_avatar);
            $stmt->bindParam(':type', $type);
            return $stmt->execute();
        }

        function getUserEmail($email,$pass) {
            $sql = "SELECT * FROM user WHERE email = :email AND password = :pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();

            return $result ? $result['type'] : false;
        }

        function getUserDisplayName($email,$pass) {
            $sql = "SELECT * FROM user WHERE email = :email AND password = :pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();

            return $result ? $result['displayname'] : false;
        }
        function getUserAvatarID($email,$pass) {
            $sql = "SELECT * FROM user WHERE email = :email AND password = :pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();

            return $result ? $result['id_avatar'] : false;
        }
        function getAvatarNameById($id) {
            $sql = "SELECT * FROM image WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetch();

            return $result ? $result['path'] : false;
        }
}
?>