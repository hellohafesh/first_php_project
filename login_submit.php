<?php
session_start();
if(isset($_POST['login'])){

    $error=[];

    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));
    $enc = md5($password);


    
require_once 'db.php';

$query = " SELECT * FROM users WHERE email='$email' OR uname='$email' AND password = '$enc'";
$result = mysqli_query($conn,$query);
 
 
if(mysqli_num_rows($result) >0){
    $data = mysqli_fetch_assoc($result);

    $active=$data['Stauts'];
    echo $active;
    if($active==2){

        $_SESSION['emailError'] = $error['emailError']="This User Account Is Blocked";
        header('location: login.php');

      
    }else{
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['email'] = $data['email'];
        setcookie('logininfo',"Log In", time()+5,'/'  );
        
        header('location: home.php');
    }



}else{
    header('location: login.php');
}

}