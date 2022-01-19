<?php
include "inc/header.php";
require_once 'db.php';


?>
<title> Sing Up</title>
  <center>
    <h1 style='color:green;'> WELL-COME TO OUR NEW PROJECT</h1>
    <h2  style='color:green;'> PLese Join With Us and Keep Support Us ! </h2> 
    
</br>
<h6 style='color:red;'> Please Fill The Correct Information </h6>
   </center>
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
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php
   include "inc/footer.php";
   session_destroy();
   ?>