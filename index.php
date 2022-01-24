<?php
include "inc/header.php";
require_once 'db.php';


?>
<title> Sing Up</title>


<header style="padding: 5px 0; background:#D6A0F5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   
                </div>
  <center>
    <h1 style='color:white;'> WELL-COME TO OUR NEW PROJECT</h1>
    <h2  style='color:white;'> PLese Join With Us and Keep Support Us ! </h2> 
    
</br>
<h6 style='color:black;'> Please Fill The Correct Information </h6>
   </center>
    <section>
        <div class="container ">
            <div class="row justify-content-center">
                
            <div class="col-md-6 mt-5 text-center ">
                     <img height="100px" src="images/1111.png" alt="">
                     <div class="card mt-3">
                        <div class="card-header">
                           
                        </div>
                
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
                            <h2>Sign Up</h2>
                        </div>
                        <div class="card-body">
                            <form action="insert.php  " method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                                    <?php
                                  if(isset($_SESSION['nameerr'])){
                                  echo "<p style='color:red;'>" .$_SESSION['nameerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="uname" placeholder="Enter Your User Name">
                                    <?php
                                   if(isset($_SESSION['unameerr'])){
                                   echo "<p style='color:red;'>" .$_SESSION['unameerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                                    <?php
                                   if(isset($_SESSION['emailerr'])){
                                   echo "<p style='color:red;'>" .$_SESSION['emailerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                                    <?php
                                   if(isset($_SESSION['passworderr'])){
                                   echo "<p style='color:red;'>" .$_SESSION['passworderr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="confirmpassword" placeholder="Enter Your Confirm Password">
                                    <?php
                                   if(isset($_SESSION['confirmpassworderr'])){
                                   echo "<p style='color:red;'>" .$_SESSION['confirmpassworderr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="photo">
                                    <?php
                                   if(isset($_SESSION['photoerr'])){
                                   echo "<p style='color:red;'>" .$_SESSION['photoerr']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" value="Submit">
                                    <div>
                                    </div>
                                <div>
                                  </br> <a href="login.php" class="btn btn-outline-success-sm"> Alrady An Account</a>
                                    </div>
                                </div>
                                </div>
                    </div>
                     </div>
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
   session_destroy();
   ?>