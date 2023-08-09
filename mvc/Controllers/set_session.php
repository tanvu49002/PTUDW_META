<?php
session_start();

if (isset($_POST['customValue'])) {
    $_SESSION['custom_variable'] = $_POST['customValue'];
    echo "Custom session variable set!";
} else {
    echo "No data received.";
}
?>
