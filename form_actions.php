<?php

$db_name = "test"; //ชื่อฐานข้อมูล
$db_host = "localhost";
$db_user = "root"; //ชื่อuser
$db_pass = "1234@#+"; //ชื่อรหัสผ่าน

try {
   $db_con = new PDO( "mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass );
   $db_con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   $db_con->exec( "set names utf8" );
} catch ( PDOException $e ) {
   echo $e->getMessage();
}

$do_what = $_GET["do"];

if ( $do_what == 'insert' ) {
   $stm = $db_con->prepare( "INSERT INTO users (username, password, name, surname, address, address_2, email, city, province, zip_code) VALUES (:username, :password, :name, :surname, :address, :address_2, :email, :city, :province, :zip_code)" );
   $stm->bindParam( "username", $_POST['email'] );
   $stm->bindParam( "password", $_POST['password'] );
   $stm->bindParam( "name", $_POST['name'] );
   $stm->bindParam( "surname", $_POST['surname'] );
   $stm->bindParam( "address", $_POST['address'] );
   $stm->bindParam( "address_2", $_POST['address_2'] );
   $stm->bindParam( "email", $_POST['email'] );
   $stm->bindParam( "city", $_POST['city'] );
   $stm->bindParam( "province", $_POST['province'] );
   $stm->bindParam( "zip_code", $_POST['zip_code'] );

   if($stm->execute()){
      echo "บันทึกข้อมูลได้สำเร็จ";
   }
   else{
      echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล กรุณาตรวจสอบใหม่อีกครั้ง !!";
   }
   // insert data to databse.
}

if ( $do_what == 'delete' ) {
   $stm = $db_con->prepare("DELETE FROM users WHERE id = :id ");
   $stm->bindParam(':id', $_GET["id"]);
   
   if($result = $stm->execute()){
      echo "ลบข้อมูลได้สำเร็จ";
      sleep(1);
      header("Location: ./form_show.php");
   }
   else{
      echo "ลบข้อมูลไม่สำเร็จ";
   }
   // delete data in database.
}

if ( $do_what == 'login' ) {
   // select data from database.
   // authen check
}