<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["status"])) {
    $status = $_POST["status"];
    
    // Cập nhật giá trị trong biến $_SESSION
    $_SESSION['status_process'] = $jsValue;
    
}
?>