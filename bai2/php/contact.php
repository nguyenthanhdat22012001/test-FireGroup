<?php
 include_once "contact_model.php";



$errors = [];
$data = [];

$name =  $_POST['name'];
$email =  $_POST['email'];
$phone =  $_POST['phone'];
$note =  $_POST['note'];

$check = insertContact($name,$email,$phone,$note);
if($check){
   $data['success'] = true;
}else{
    $data['success'] = false;
}
echo json_encode($data);