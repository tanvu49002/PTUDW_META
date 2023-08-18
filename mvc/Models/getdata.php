<?php

    class getdata extends Database {
        function getData($array, $table, $last = '') {
            $sql = "SELECT ";
            foreach ($array as $value) {

                $sql .= $value . ",";
                
            }
            $sql = substr($sql, 0, -1);
            $sql .= " from " . $table . " " . $last;

            // echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa{$sql}";
            $stmt = $this->conn->prepare($sql);

            // $stmt->bindParam(':id_course', $id_course);
            

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $result = $stmt->fetchAll();
            return $result;
            
        }
    }
?>