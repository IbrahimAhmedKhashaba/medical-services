<?php
require('functions/validate.php');
require('functions/db.php');
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['order'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $notes = $_POST['notes'];
    $city = $_POST['city'];
    $service = $_POST['service'];

    if(checkEmpty($name) && checkEmpty($mobile) && checkEmpty($service) && checkEmpty($city)){
        if(store('orders' , ['order_name' => $name, 'order_email' => $email, 'order_mobile' => $mobile, 'order_notes' => $notes, 'order_city_id' => $city, 'order_ser_id' => $service])){
            $_SESSION['success'] = "order added successfully";
        } else {
            $_SESSION['error'] = "order not added";
        }
    } else {
        $_SESSION['error'] = "please fill name, mobile, city and service fields";
    }
    header('location: index.php');
}
?>