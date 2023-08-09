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

            return $result;
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
        
        function updateUserInfor($id, $displayname, $id_avatar) {
            $sql = "UPDATE `user` SET `displayname`= :displayname ,`id_avatar`= :id_avatar WHERE `id` = :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':displayname', $displayname);
            $stmt->bindParam(':id_avatar', $id_avatar);
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        }

        function changePassword($id, $pass) {
            $sql = "UPDATE `user` SET `password`= :pass WHERE `id` = :id";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':pass', $pass);
            
            $stmt->bindParam(':id', $id);

            return $stmt->execute();
        }

        function checkPassword($id, $pass) {
            $sql = "SELECT * FROM user WHERE id = :id AND password = :pass";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':pass', $pass);
            $stmt->execute();
            return $stmt->rowCount() > 0 ? $stmt->fetch(PDO::FETCH_ASSOC) : false;
        }
}
?>