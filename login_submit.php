<?php
session_start();
if(isset($_POST['login'])){
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $enc = md5($password);


    
require_once 'db.php';

$query = " SELECT id, name, email, password FROM users WHERE email='$email' AND password = '$enc'";
$result = mysqli_query($conn,$query);
 
 
if(mysqli_num_rows($result) >0){
    $data = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['email'] = $data['email'];



    setcookie('logininfo',"Log In", time()+5,'/'  );
    
    header('location: userlist.php');
}else{
    header('location: login.php');
}

}