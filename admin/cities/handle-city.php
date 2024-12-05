<?php
require 'E:/xampp/htdocs/medical-project/config.php';
require('E:/xampp/htdocs/medical-project/functions/db.php');
require('E:/xampp/htdocs/medical-project/functions/validate.php'); 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_city'])){
    $name = $_POST['name'];
    if(checkEmpty($name)){
        if(store('cities' , ['city_name' => $name])){
            $_SESSION['success'] = 'City added successfully';
            header('Location: add.php');
        } else {
            $_SESSION['error'] = 'City not added successfully';
            header('Location: add.php');
        }
    } else{
        $_SESSION['error'] = 'Please enter a name';
        header('Location: add.php');
    }
} else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_city'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    if(checkEmpty($name)){
        if(update('cities' , 'id' , $id , ['city_name' => $name])){
            header('Location: index.php');
        } else {
            $_SESSION['error'] = 'City not updated successfully';
            header('Location: edit.php');
        }
    } else{
        $_SESSION['error'] = 'Please enter a name';
        header('Location: edit.php');
    }
} else if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(delete('cities' , 'id' , $id)){
        header('Location: index.php');
    } else {
        $_SESSION['error'] = 'City not deleted successfully';
        header('Location: index.php');
    }
}
?>