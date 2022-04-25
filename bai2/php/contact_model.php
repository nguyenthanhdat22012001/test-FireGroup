<?php
include_once "database.php";

function insertContact($name,$email,$phone,$note){
    $sql="INSERT INTO contact (name, email, phone, note)
    VALUES ('{$name}','{$email}', '{$phone}', '{$note}')";
    return execute($sql);
}