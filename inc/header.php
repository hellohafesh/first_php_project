<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"> OUR PROJECT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="Mynav">
      <ul class="navbar-nav ms-auto">
      <?php 
        if(isset($_SESSION['id'])){
          ?>
            <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <?php 
        }else{
          ?>
          <li class="nav-item">
          <a class="nav-link" href="index.php">Sing Up</a>
        </li>

          <?php

        }
        ?>

        <?php 
        if(isset($_SESSION['id'])){
          ?>
            <li class="nav-item">
          <a class="nav-link" href="userlist.php">All Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userstatus.php">Users Status</a>
        </li>
       
          <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
        </li>
        <?php 
        }else{
          ?>
          <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>

          <?php

        }
        ?>
       



        
      </ul>
    </div>
  </div>
</nav>
