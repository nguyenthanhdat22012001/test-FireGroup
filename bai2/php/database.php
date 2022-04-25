<?php
  function getConnection()
  {
      //Khai báo server
      $host = 'localhost';
      $dbname = 'test_intern';
      $username ='root';
      $password = '';
      $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
      //tạo đối tượng thuộc PDO
      $DBH = new PDO('mysql:host='.$host.';dbname='.$dbname,$username,$password,$options);
      return $DBH;
  }
  function query($sql){
      $connect = getConnection();
      $result = $connect->query($sql);
      return $result;
  }

  function execute($sql){
      $connect = getConnection();
      $result = $connect->exec($sql);
      return $result;
  }
?>