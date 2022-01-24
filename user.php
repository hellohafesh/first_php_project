<?php
require_once 'db.php';
$id=$_GET['id'];
$query="SELECT * FROM users WHERE id=$id";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)){
    $data=mysqli_fetch_assoc($result);
}
require_once "inc/header.php";
?>
<title> User </title>


<header style="padding: 5px 0; background:#B781AD">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   
                </div> 
<section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5">               
                    <div class="card">
                        <div class="card-header">
                            <h2><?= $data['name']?></h2>
                        </div>
                        <div class="card-body">
                            <table  class="table table-striped table-bordered">
                                <tr class="table-dark">
                                    <td>Name</td>
                                    <td><?= $data['name']?></td>
                                </tr>
                                <tr class="table-dark">
                                    <td>User Name</td>
                                    <td><?= $data['uname']?></td>
                                </tr>
                                <tr class="table-dark">
                                    <td>Email</td>
                                    <td><?= $data['email']?></td>
                                </tr>
                                <tr class="table-dark">                                   
                                    <td>Photo</td>
                                    <td><img width="300" src="uploads/profile/<?=$data['photo']?>"><?= $data['photo']?></td>
                                </tr>
                            </table>
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
require_once "inc/footer.php";