<?php
include "inc/header.php";
if(!isset($_SESSION['id'])){
    header('Location:login.php');
} 



require_once 'db.php';
$query=" SELECT id, name, email, Stauts FROM users";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
    $datas=mysqli_fetch_all($result,true);
} 

?>
<title> All User List </title>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5">             
                    <div class="card">
                        <div class="card-header">
                            <h2>Users Status </h2>
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
                                foreach($datas as $key => $data){
                                   ?>
                                 <tr>
                                    <td><?= ++$key ?></td>
                                 
                                    <td><?=$data['name']?></td>
                                    <td><?=$data['email']?></td>
                                    <td><?=$data['Stauts']==1 ? "Active" : "Deactive" ?></td>
                                    <td>
                                    <a href="status.php?id=<?= $data['id']?>"> <?=$data['Stauts']==1 ? "Deactive" : "Active " ?></a>
                                    </td>
                                </tr>
                                <?php
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