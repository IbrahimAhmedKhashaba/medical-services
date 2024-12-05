<?php
require 'E:/xampp/htdocs/medical-project/config.php';
require('E:/xampp/htdocs/medical-project/functions/db.php');
require('E:/xampp/htdocs/medical-project/functions/validate.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_admin'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

    if(checkEmpty($name) && checkEmpty($email) && checkEmpty($password) && checkEmpty($password_confirmation)){
        if(checkEmail($email)){
            if(checkPassword($password)){
                if(checkPasswordMatch($password , $password_confirmation)){
                    if(store('admins' , ['admin_name' => $name, 'admin_email'=> $email, 'admin_password' => password_hash($password, PASSWORD_DEFAULT)])){
                        $_SESSION['success'] = 'Admin Added Successfully';
                        header('Location: add.php');
                    } else{
                        $_SESSION['success'] = 'Admin Not Added Successfully';
                        header('Location: add.php');
                    }
                } else{
                    $_SESSION['error'] = 'Password and Password Confirmation are not match';
                    header('Location: add.php');
                }
            } else{
                $_SESSION['error'] = 'Password is must be at least 8 characters';
                header('Location: add.php');
            }
        } else{
            $_SESSION['error'] = 'Please Type a valid email address';
            header('Location: add.php');
        }
    } else{
        $_SESSION['error'] = 'Please fill all the fields';
        header('Location: add.php');
    }
} else if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(checkEmpty($email) && checkEmpty($password)){
        if(checkEmail($email)){
            if(checkAdmin($email , $password) != false){
                $_SESSION['admin_name'] = checkAdmin($email , $password);
                header('Location: ../index.php');
            } else {
                $_SESSION['error'] = 'No user match';
                header('Location: ../login.php');
            }
        } else{
            $_SESSION['error'] = 'please enter a valid email';
            header('Location: ../login.php');
        }
    } else {
        $_SESSION['error'] = 'Please fill all the fields';
        header('Location: ../login.php');
    } 
} else if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    session_destroy();
    header('Location: ../login.php');
}