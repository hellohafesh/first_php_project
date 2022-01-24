<?php
include "inc/header.php";
if(isset($_SESSION['id'])){
    header('Location:userlist.php');
} 

require_once 'db.php';


?>


 <title> Log In</title>

 <body>
<section class="mt-5 pt-5">
        <div class="container" >
            <div class="row justify-content-center ">
                <div class="col-md-6 mt-5 text-center ">
                     <img height="100px" src="images/login.png" alt="">
                    <div class="card mt-3">
                        <div class="card-header">
                           
                        </div>
                        <div class="card-body">
                            <form action="login_submit.php" method="POST" >
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                                    <?php
                                  if(isset($_SESSION['emailError'])){
                                  echo "<p style='color:red;'>" .$_SESSION['emailError']."</p>";
                                   };
                                    ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your User password">
                                </div>
                                
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-primary" name="login" value="Log In">
                               
                            </form>
</br>
                                <div> <a href="index.php" class="btn btn-outline-success-sm"> Or Create  Account</a>
                          
                        </div>
                    </div>
                </div>
            </div>
</section>
</body>
 <?php


include "inc/footer.php";
?> 