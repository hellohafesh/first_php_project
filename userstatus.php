<?php
include "inc/header.php";
if(!isset($_SESSION['id'])){
    header('Location:login.php');
} 



require_once 'db.php';
$query=" SELECT id, name, email, stauts FROM users WHERE stauts='1'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
    $datas=mysqli_fetch_all($result,true);
} 
$query2="SELECT id, name, email, stauts FROM users WHERE stauts='2' OR stauts='0'";
$result2=mysqli_query($conn,$query2);
if(mysqli_num_rows($result2) > 0){
    $deactiveUsers=mysqli_fetch_all($result2,true);
} 




?>
<title> All User List </title>

<header style="padding: 5px 0; background:#6F3C3C">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   
                </div>
  
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5">             
                    <div class="card">
                        <div  style="padding: 5px 0; background:#0F720F"  class="card-header">
                            <h2>Active Users</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <tr class="table-dark">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th> Stauts</th> 
                                    <th>Action</th> 
                                   
                                </tr>
                                <?php
                                if(!empty($datas)){
                                    foreach($datas as $key => $data){
                                        ?>
                                      <tr  class="table-dark" >
                                         <td><?= ++$key ?></td>
                                      
                                         <td><?=$data['name']?></td>
                                         <td><?=$data['email']?></td>
                                         <td><?=$data['stauts']==1 ? "Active" : "Deactive" ?></td>
                                         <td>
                                         <a href="status.php?id=<?= $data['id']?>"> <?=$data['stauts']==1 ? "Deactive" : "Active " ?></a>
                                         </td>
                                     </tr>
                                     <?php
                                     }
                                }
                                
                                ?>                               
                            </table>
                        </div>
                    </div> 
                     <div class="card">
                        <div  style="padding: 5px 0; background:#0F720F"  class="card-header">
                            <h2>Deactive Users</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered">
                                <tr class="table-dark">
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th> Stauts</th> 
                                    <th>Action</th> 
                                   
                                </tr>
                                <?php
                                 if(!empty($deactiveUsers)){
                                    foreach($deactiveUsers as $key => $data){
                                        ?>
                                      <tr  class="table-dark" >
                                         <td><?= ++$key ?></td>
                                      
                                         <td><?=$data['name']?></td>
                                         <td><?=$data['email']?></td>
                                         <td><?=$data['stauts']==1 ? "Active" : "Deactive" ?></td>
                                         <td>
                                         <a href="status.php?id=<?= $data['id']?>"> <?=$data['stauts']==1 ? "Deactive" : "Active " ?></a>
                                         </td>
                                     </tr>
                                     <?php
                                     }
                                 }

                                
                                ?>                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<?php
include "inc/footer.php";
