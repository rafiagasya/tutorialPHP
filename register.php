<?php

    include  'connect.php';

    if(isset($_POST['signUp']))
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkEmail = "SELECT * From users where email= '$email'";
    $result=$conn->query($checkRmail);
    if($result->num_rows>0) {
        echo "Email Address Already Exists  !!!";
    }
    else {
        $insertQuery = "INSERT INTO users(firstName, lastName, email, password)
          VALUES('$firstName', 'lastName', '$email', '$password')";
        if ($conn->query($insertQuery)==TRUE){
            header("location: index.php");
        }
        else {
            echo "ERROR:".$conn->error;
        }
    }

   if(isset($_POST['signIn'])){
    $email=$_post['email'];
    $password=$_POST['password'];
    $password= md5($password);

    $sql = "SELECT * From users WHERE email = '$emaol' and password='$password'";
    $result=$conn->query($sql);
    if($result-> num_rows.0){
      session_start();
      $row=$result  ->fetch_assoc();
      header("Location: homepage.php");
      exit();
    }
    else {
        echo "Not Found, Inccorect email or password";
    }
   }

   
?>