<?php
$id=$_GET['id'];
require_once 'db.php';
$error=[];
if(isset($_POST['submit'])){
    $name=trim(htmlentities($_POST['name']));
    $uname=trim(htmlentities($_POST['uname']));
    $email=trim(htmlentities($_POST['email']));
   
    $photo=$_FILES['photo'];
    if(empty($name)){
        $error['nameerr']="Enter Your Name!";
    }
    if(empty($uname)){
        $error['unameerr']="Enter Your User Name!";
    }
    if(empty($email)){
        $error['emailerr']="Enter Your Valid Email!";
    }
    
if(empty($photo['name'])){
    $error['photoerr']="Upload Your Photo!";
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
            $upload_photo=move_uploaded_file($photo['tmp_name'],'uploads/profile/'.$photo_name);
             if($upload_photo){              
                 $update_query="update users set name='$name',uname='$uname',email='$email',photo='$photo_name' where id='$id'";            
                $result= mysqli_query($conn,$update_query);
                if($result){
                    $success="User Update Successfully Done!";
             }
            }else{
                $error="File Not Uploated!";
            }
            if(mysqli_num_rows($result)> 0){
                header('location: userlist.php');
            }else{
                header('location: login.php');
            }
        }  
    }
}
}

$select_user_query="SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($conn,$select_user_query);
if(mysqli_num_rows($result)){
    $data=mysqli_fetch_assoc($result);
}

include "inc/header.php";
?>
<title> Edit Your Profile </title>

<header style="padding: 5px 0; background:#D6A0F5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   
                </div>

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mt-5">            
                  <?php 
                  if(isset($success)){
                      ?>
                      <div class="alert alert-success">
                         <p><?=$success ?></p> 
                      </div>
                      <?php
                  } 
                  ?>
                    <div class="card">
                        <div class="card-header">
                            <h2>Update User</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?= $data['name']?>">
                                    <?php
                                  if(isset($error['nameerr'])){
                                  echo "<p style='color:red;'>" .$error['nameerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="uname" placeholder="Enter Your User Name" value="<?= $data['uname']?>">
                                    <?php
                                   if(isset($error['unameerr'])){
                                   echo "<p style='color:red;'>" .$error['unameerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" value="<?= $data['email']?>">
                                    <?php
                                   if(isset($error['emailerr'])){
                                   echo "<p style='color:red;'>" .$error['emailerr']."</p>";
                                   };
                                    ?>
                                </div>
                              
                                </div>
                                <div class="mb-3">
                                <input name="photo" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                    <div>
                                    <img id="output" src="" width="100" height="100">
                                    </div>


                                    <?php
                                   if(isset($error['photoerr'])){
                                   echo "<p style='color:red;'>" .$error['photoerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container py-5"  style='color:black;'>
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small style='color:white;' >&copy;  soumik 2021 - 2022</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a style='color:black;' class="link-secondary" href="#">Cool stuff</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Random feature</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Team feature</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a style='color:black;'class="link-secondary" href="#">Another one</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div  class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a style='color:black;' class="link-secondary" href="#">Resource name</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Resource</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Another resource</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul  class="list-unstyled text-small">
        <li><a  style='color:black;' class="link-secondary" href="#">Business</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Education</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Government</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a style='color:black;' class="link-secondary" href="#">Team</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Locations</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Privacy</a></li>
        <li><a style='color:black;' class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>
<?php
include "inc/footer.php";