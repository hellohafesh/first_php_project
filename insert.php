 <?php
session_start();

   require_once 'db.php';
 $error=[];
 if(isset($_POST['submit'])){
     $name=trim(htmlentities($_POST['name']));
     $uname=trim(htmlentities($_POST['uname']));
     $email=trim(htmlentities($_POST['email']));
     $password=$_POST['password'];
     $encpass= md5($password);
     $confirmpassword=$_POST['confirmpassword'];
     $photo=$_FILES['photo'];
     if(empty($name)){
        $_SESSION['nameerr'] = $error['nameerr']="Enter Your Name!";
     }
     if(empty($uname)){
        $_SESSION['unameerr'] = $error['unameerr']="Enter Your User Name!";
     }
     if(empty($email)){
        $_SESSION['emailerr'] =$error['emailerr']="Enter Your Valid Email!";
     }
     if(empty($password)){
        $_SESSION['passworderr'] =$error['passworderr']="Enter Your Password!";
 }
 if(empty($confirmpassword)){
    $_SESSION['confirmpassworderr'] =$error['confirmpassworderr']="Enter Your Confirm Password!";
 }
 if(!empty($password) && !empty($confirmpassword) && $password!=$confirmpassword){
     $error["confirmpassworderr"]="password Doesn't Matched!";
     $error['passworderr']="password Doesn't Matched!";
 }
 if(strlen($password)>9){
    $_SESSION['unameerr'] = $error['passworderr']="Pssword Length Maximum 8 Characters Long.";
 }
 if(empty($photo['name'])){
    $_SESSION['unameerr'] =  $error['photoerr']="Upload Your Photo!";
 } 
 if(empty($error)){
   
     if($photo['name']){
         $path_info=pathinfo($photo["name"]);
         $photoExtension=$path_info['extension'];
         if($photoExtension!="png" && $photoExtension!="PNG" && $photoExtension!="jpg" && $photoExtension!="JPG"){
             $error['photoerr']="Only JPG AND PNG Is Allowed.!";
         }else{
             $photo_ex =explode('.',$photo['name']);
             $photo_name=$name.'-'.time().'.'.end($photo_ex);
             $upload_photo=move_uploaded_file($photo['tmp_name'],'uploads/profile/'.$photo_name );
              if($upload_photo){
                 $query="INSERT INTO users(name, uname, email, password, photo) VALUES ('$name','$uname','$email','$encpass', '$photo_name')";
                 $result= mysqli_query($conn,$query);
                 
                if($result){
                    header("Location:userlist.php");
                }
              }
            
             }
         }  
     }  else{
        header("Location:index.php");
     }
 }
?> 

