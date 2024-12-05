<?php

require_once 'E:/xampp/htdocs/medical-project/config.php';
    function store($table , $data){
        $keys = '';
        $values = '';
        foreach($data as $key => $value){
            $keys .= $key.',';
            $values .= '"'.$value.'"'.',';
        }
        $keys = rtrim($keys, ',');
        $values = rtrim($values, ',');
        $sql = 'INSERT INTO `'.$table.'` ('.$keys.') VALUES ('.$values.');';
        
        if (connToDb($sql)){
            $_SESSION['success'] = 'admin added successfully';
            return true;
        } else {
            $_SESSION['success'] = 'admin did not be added successfully';
            return false;
        }
    }

    function checkAdmin($email , $password){
        $sql = "SELECT * FROM `admins` WHERE `admin_email` = '$email'";
        $result = connToDb($sql );
        $user = mysqli_fetch_assoc($result);
        if(!$user){
            return false;
        }
        if(password_verify($password, $user['admin_password'])){
            return false;
        }
        $_SESSION['admin_name'] = $user['admin_name'];
        $_SESSION['admin_email'] = $user['admin_email'];
        $_SESSION['admin_id'] = $user['admin_id'];
        return true;
    }

    function getData($table){
        $sql = "SELECT * FROM `".$table."`;";
        $result = connToDb($sql );
        $data = mysqli_fetch_all($result , MYSQLI_ASSOC);
        return $data;
    }

    function getRecord($table , $column , $value){
        $sql = "SELECT * FROM `".$table."` WHERE `".$column."`=".$value;
        $result = connToDb($sql );
        $data = mysqli_fetch_assoc($result);
        return $data;
    }

    function update($table ,$column, $val, $data){
        $sql = "UPDATE `".$table."` SET";
        foreach($data as $key => $value){
            $sql .= " `$key` = '".$value."',";
        }
        $sql = rtrim($sql , ',');
        $sql .= " WHERE `".$column."` = ".$val;
        $result = connToDb($sql);
        return $result;
    }

    function delete($table , $column , $value){
        $sql = "DELETE FROM `".$table."` WHERE `".$column."` = ".$value;
        $result = connToDb($sql);
        return $result;
    }

    function getCount($table , $today = false){
        $sql = "SELECT count(id) as 'count' FROM `".$table."`";
        if($today){
            $sql .= ' WHERE DATE(created_at) = CURDATE();';
        }
        $result = connToDb($sql);
        return $result;
    }







    function connToDb($sql){
        $conn = mysqli_connect(HOST, USER, PASSWORD, DB, PORT);
        $result = mysqli_query($conn , $sql);
        return $result;
    }







?>