<?php

require_once 'db.php';
$id = $_GET['id'];
$query = " SELECT Stauts FROM users WHERE id = '$id' ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)> 0 ){
    $data = mysqli_fetch_assoc($result);
}



 echo $data['Stauts'];

 if ($data['Stauts'] ==1){

    $query = " UPDATE  users  SET Stauts='2' WHERE id = '$id' ";
    mysqli_query($conn, $query);
    header( "Location:userstatus.php");
 }else{
    $query = " UPDATE users  SET Stauts='1'  WHERE id = '$id' ";
    mysqli_query($conn, $query);
    header( "Location:userstatus.php");

 }
 ?>





