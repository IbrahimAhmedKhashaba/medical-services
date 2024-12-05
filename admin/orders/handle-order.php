<?php
require 'E:/xampp/htdocs/medical-project/config.php';
require('E:/xampp/htdocs/medical-project/functions/db.php');
require('E:/xampp/htdocs/medical-project/functions/validate.php'); 
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(delete('orders' , 'id' , $id)){
        header('Location: index.php');
    } else {
        $_SESSION['error'] = 'Order not deleted successfully';
        header('Location: index.php');
    }
}
?>